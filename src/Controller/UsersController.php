<?php

namespace App\Controller;

use Cake\Http\Exception\NotFoundException;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Http\Client; // For HTTP requests (Recaptcha)
use Cake\Mailer\Mailer;
use Cake\Core\Configure;

class UsersController extends AppController
{
    // public function initialize(): void
    // {
    //     parent::initialize();
    //     $this->loadComponent('Flash');
    //     // Load Authentication component if needed
    //     $this->loadComponent('Authentication.Authentication');
    // }

    // private function __checkRecaptchaResponse($response)
    // {
    //     $http = new Client();
    //     $url = 'https://www.google.com/recaptcha/api/siteverify';

    //     $data = [
    //         'secret' => env('RECAPTCHA_SECRET_KEY'), // Use environment variable for secret key
    //         'response' => $response,
    //         'remoteip' => $this->request->clientIp(),
    //     ];

    //     $response = $http->post($url, $data);
    //     $result = $response->getJson();

    //     return !empty($result['success']) && $result['success'];
    // }

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }


    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['login']);
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('login_layout');
        $this->request->allowMethod(['get', 'post']);

        if($this->request->is('post')){
            $result = $this->Authentication->getResult();

            // CAPTCHA validation
            $recaptchaSecret = '6Le_0EIrAAAAANZzOUob3YJG3vr_wCfVN-LmJTKx';
            $recaptchaResponse = $this->request->getData('g-recaptcha-response');

            $http = new Client();
            $verifyResponse = $http->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $recaptchaSecret,
                'response' => $recaptchaResponse,
                'remoteip' => $this->request->clientIp()
            ]);

            $responseData = $verifyResponse->getJson();

            if (!empty($responseData['success']) && $responseData['success'] == true) {
                if ($result && $result->isValid()) {
                    $redirect = $this->request->getQuery('redirect', [
                        'controller' => 'Dashboards',
                        'action' => 'index',
                    ]);

                    return $this->redirect($redirect);
                }

                if ($this->request->is('post') && !$result->isValid()) {
                    $this->Flash->error(__('Invalid username or password'));
                }
            } else {
                $this->Flash->error('Captcha validation failed. Please try again.');
            }
        }





    }

    // public function login()
    // {
    //     $this->viewBuilder()->setLayout('login_layout');
    //     $this->request->allowMethod(['get', 'post']);

    //     $result = $this->Authentication->getResult();

    //     if ($this->request->is('post')) {
    //         // Check if reCAPTCHA response is present
    //         $recaptchaResponse = $this->request->getData('g-recaptcha-response');

    //         if (empty($recaptchaResponse)) {
    //             $this->Flash->error(__('Please complete the reCAPTCHA.'));
    //             return;
    //         }

    //         // Verify reCAPTCHA with Google
    //         $http = new Client();
    //         $response = $http->post('https://www.google.com/recaptcha/api/siteverify', [
    //             'secret' => Configure::read('6Le_0EIrAAAAANZzOUob3YJG3vr_wCfVN-LmJTKx'),
    //             'response' => $recaptchaResponse,
    //             'remoteip' => $this->request->clientIp()
    //         ]);

    //         $body = $response->getJson();

    //         if (empty($body['success']) || !$body['success']) {
    //             $this->Flash->error(__('reCAPTCHA verification failed. Please try again.'));
    //             return;
    //         }

    //         // If reCAPTCHA is valid, check authentication
    //         if ($result && $result->isValid()) {
    //             $redirect = $this->request->getQuery('redirect', [
    //                 'controller' => 'Dashboards',
    //                 'action' => 'index',
    //             ]);
    //             return $this->redirect($redirect);
    //         }

    //         $this->Flash->error(__('Invalid username or password'));
    //     }
    // }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }

    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    public function view($id = null)
    {
        try {
            $user = $this->Users->get($id);
            $this->set(compact('user'));
        } catch (RecordNotFoundException $e) {
            throw new NotFoundException(__('User not found'));
        }
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please try again.'));
        }
        $this->set(compact('user'));
    }

    public function edit($id = null)
    {
        try {
            $user = $this->Users->get($id);
        } catch (RecordNotFoundException $e) {
            throw new NotFoundException(__('Invalid user'));
        }

        if ($this->request->is(['post', 'put'])) {
            $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please try again.'));
        }
        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        try {
            $user = $this->Users->get($id);
            if ($this->Users->delete($user)) {
                $this->Flash->success(__('The user has been deleted.'));
            } else {
                $this->Flash->error(__('The user could not be deleted. Please try again.'));
            }
        } catch (RecordNotFoundException $e) {
            throw new NotFoundException(__('Invalid user'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
