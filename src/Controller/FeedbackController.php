<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\BadRequestException;
use Cake\Mailer\Mailer;
use Cake\Event\EventInterface;
use Cake\Routing\Router;
use Cake\Log\Log;
use Cake\Http\ServerRequest;

/**
 * FeedbackController
 *
 * This controller handles the feedback form submission.
 */
class FeedbackController extends AppController
{
    // public function initialize(): void
    // {
    //     parent::initialize();
    //     $this->loadComponent('Security', [
    //         'csrfCheck' => true,
    //         'csrfExpires' => '+1 hour',
    //         'blackHoleCallback' => 'blackhole'
    //     ]);
    //     $this->loadComponent('Captcha');
    // }

    // public function beforeFilter(EventInterface $event)
    // {
    //     parent::beforeFilter($event);
    //     $this->Authentication->allowUnauthenticated(['index']);
    // }

    // // Handle CSRF Blackhole errors
    // public function blackhole($errorType)
    // {
    //     $errorMap = [
    //         'auth' => 'form validation error, or a controller/action mismatch error.',
    //         'csrf' => 'CSRF error.',
    //         'get' => 'HTTP method restriction failure.',
    //         'post' => 'HTTP method restriction failure.',
    //         'put' => 'HTTP method restriction failure.',
    //         'delete' => 'HTTP method restriction failure.',
    //         'secure' => 'SSL method restriction failure.',
    //     ];

    //     Log::notice(
    //         "Request to the '{$this->request->getParam('action')}' endpoint was blackholed by SecurityComponent due to a {$errorMap[$errorType]}.",
    //         'security'
    //     );
    //     throw new BadRequestException(__('Security violation.'));
    // }

    // private function __checkRecaptchaResponse($response)
    // {
    //     $url = 'https://www.google.com/recaptcha/api/siteverify';
    //     $data = [
    //         'secret' => env('RECAPTCHA_SECRET_KEY'),
    //         'response' => $response,
    //         'remoteip' => $this->request->clientIp()
    //     ];

    //     $options = [
    //         'http' => [
    //             'header' => "Content-type: application/x-www-form-urlencoded\r\n",
    //             'method' => 'POST',
    //             'content' => http_build_query($data)
    //         ]
    //     ];

    //     $context = stream_context_create($options);
    //     $jsonResult = file_get_contents($url, false, $context);
    //     $result = json_decode($jsonResult);
    //     return $result->success ?? false;
    // }

    public function index()
    {
        $this->set('page_title', 'Reach Us');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');



        // if ($this->request->is('post')) {
        //     $feedbackData = $this->request->getData('Feedback');
        //     if (!empty($feedbackData)) {
        //         // Check CSRF token match
        //         if ($this->request->getParam('_csrfToken') === $feedbackData['_Token']['key']) {
        //             // Validate Recaptcha response
        //             if ($this->__checkRecaptchaResponse($this->request->getData('g-recaptcha-response'))) {
        //                 // Sanitize user input
        //                 $feedbackData['name'] = h(strip_tags($feedbackData['name']));
        //                 $feedbackData['message'] = h(strip_tags($feedbackData['message']));

        //                 // Save feedback
        //                 if ($this->Feedback->save($this->Feedback->newEntity($feedbackData))) {
        //                     $this->Flash->success(__('Feedback submitted successfully!'));

        //                     // Send feedback via email
        //                     $mailer = new Mailer();
        //                     $mailer->setFrom([$feedbackData['email'] => $feedbackData['name']])
        //                         ->setTo('info@bdhonda.com')
        //                         ->setSubject('BD Honda Website Feedback Form')
        //                         ->deliver(h(strip_tags($feedbackData['message'])));

        //                     return $this->redirect($this->referer());
        //                 } else {
        //                     $this->Flash->error(__('Feedback not submitted!'));
        //                 }
        //             } else {
        //                 $this->Flash->error(__('Captcha verification failed!'));
        //                 return $this->redirect(['controller' => 'Feedback', 'action' => 'index']);
        //             }
        //         } else {
        //             $this->Flash->error(__('Security Token Verification Failed!'));
        //             return $this->redirect(['controller' => 'Feedback', 'action' => 'index']);
        //         }
        //     }
        // }

    }
}
