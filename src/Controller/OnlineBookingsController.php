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

    public function index($slug)
    {
        $this->set('page_title', 'Bangladesh Honda Private Limited');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');
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
