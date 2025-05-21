<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;
use Cake\Log\Log;
use Cake\Http\Exception\BadRequestException;
use Cake\Http\Client;

/**
 * OnlineBookings Controller
 *
 * @property \App\Model\Table\OnlineBookingsTable $OnlineBookings
 * @property \Cake\Controller\Component\PaginatorComponent $Paginator
 * @property \Cake\Controller\Component\FlashComponent $Flash
 */
class OnlineBookingsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }

    /**
     * Components
     *
     * @var array
     */
    // public $components = ['Paginator', 'Flash'];

    // public function initialize(): void
    // {
    //     parent::initialize();
    //     $this->loadModel('Divisions');
    //     $this->loadModel('Dealers');
    //     $this->loadModel('Products');
    //     $this->loadModel('OnlineBookings');

    //     $this->Authentication->allowUnauthenticated(['index', 'captcha', 'testRide', 'bookNow']);
    // }

    // Security backhole error handling
    // public function blackhole(string $errorType): void
    // {
    //     $errorMap = [
    //         'auth' => 'Form validation error, or a controller/action mismatch error.',
    //         'csrf' => 'CSRF error.',
    //         'get' => 'HTTP method restriction failure.',
    //         'post' => 'HTTP method restriction failure.',
    //         'put' => 'HTTP method restriction failure.',
    //         'delete' => 'HTTP method restriction failure.',
    //         'secure' => 'SSL method restriction failure.',
    //         'myMoreValuableErrorType' => 'My custom and very specific reason for the error type.'
    //     ];

    //     Log::notice("Request to the '{$this->request->getParam('action')}' endpoint was blackholed by SecurityComponent due to a {$errorMap[$errorType]}");
    // }

    // private function checkRecaptchaResponse(string $response): bool
    // {
    //     $http = new Client();
    //     $url = 'https://www.google.com/recaptcha/api/siteverify';
    //     $data = [
    //         'secret' => $this->getConfig('Recaptcha.SecretKey'),
    //         'response' => $response,
    //         'remoteip' => $this->request->clientIp()
    //     ];
    //     $response = $http->post($url, $data);

    //     if ($response->isOk()) {
    //         $result = $response->getJson();
    //         return $result['success'] ?? false;
    //     }
    //     return false;
    // }

    public function index($product_slug)
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            // CAPTCHA validation
            $recaptchaSecret = '6Le_0EIrAAAAANZzOUob3YJG3vr_wCfVN-LmJTKx';
            $recaptchaResponse = $data['g-recaptcha-response'];

            $http = new Client();
            $verifyResponse = $http->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $recaptchaSecret,
                'response' => $recaptchaResponse,
                'remoteip' => $this->request->clientIp()
            ]);

            $responseData = $verifyResponse->getJson();


            if (!empty($responseData['success']) && $responseData['success'] == true) {
                $onlineBooking = $this->OnlineBookings->newEntity([
                    'first_name' => h(strip_tags($data['first_name'])),
                    'last_name' => h(strip_tags($data['last_name'])),
                    'message' => h(strip_tags($data['message'])),
                    'email' => $data['email'],
                    'mobile' => $data['mobile'],
                    'product_id' => $data['product_id'],
                    'color' => $data['color'],
                    'dealer_id' => $data['dealer_id'],
                    'created_ip' => $this->request->clientIp(),
                    'date_time' => $data['date_time'],
                ]);

                if ($this->OnlineBookings->save($onlineBooking)) {
                    // Query data saved
                    $this->Flash->success('Your application has been submitted successfully!');
                    return $this->redirect($this->referer());
                } else {
                    $this->Flash->error('Not submitted!');
                }
            } else {
                $this->Flash->error('Captcha validation failed. Please try again.');
                return $this->redirect($this->referer());


                $this->set('page_title', 'Bangladesh Honda Private Limited');
                $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
                $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');


                $slug = h(strip_tags($product_slug));
                $productTable = $this->getTableLocator()->get('Products');
                $productDetails = $productTable->find()
                    ->where(['Products.slug' => $slug])
                    ->contain(['Colors'])
                    ->first();

                $divisionTable = $this->getTableLocator()->get('Divisions');
                $divisions = $divisionTable->find('list')->toArray();


                $this->set('slug', $slug);
                $this->set('productDetails', $productDetails);
                $this->set('divisions', $divisions);
            }

        } else {
            $this->set('page_title', 'Bangladesh Honda Private Limited');
            $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
            $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');


            $slug = h(strip_tags($product_slug));
            $productTable = $this->getTableLocator()->get('Products');
            $productDetails = $productTable->find()
                ->where(['Products.slug' => $slug])
                ->contain(['Colors'])
                ->first();

            $divisionTable = $this->getTableLocator()->get('Divisions');
            $divisions = $divisionTable->find('list')->toArray();


            $this->set('slug', $slug);
            $this->set('productDetails', $productDetails);
            $this->set('divisions', $divisions);
        }

    }


    /**
     * --------- Admin section -----------
     */
    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Online Bookings');

        $queries = $this->OnlineBookings->find()
            ->contain(['Products', 'Dealers'])
            ->limit(200)
            ->orderBy(['OnlineBookings.created' => 'DESC'])
            ->all();

        $this->set(compact('queries'));
    }
}
