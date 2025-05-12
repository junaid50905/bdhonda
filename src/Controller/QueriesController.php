<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;
use Cake\Http\Exception\NotFoundException;
use Cake\Mailer\Email;
use Cake\Routing\Router;
use Cake\Log\Log;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;


class QueriesController extends AppController
{

    // public function beforeFilter(EventInterface $event)
    // {
    //     parent::beforeFilter($event);
    //     // Allow public actions
    //     $this->Authentication->allowUnauthenticated(['index', 'captcha']);
    // }

    /**
     * Verify reCAPTCHA response.
     *
     * @param string $response The reCAPTCHA response.
     * @return bool
     */
    private function __checkRecaptchaResponse($response)
    {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => Configure::read('Recaptcha.SecretKey'),
            'response' => $response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
            ],
        ];

        $context = stream_context_create($options);
        $json_result = file_get_contents($url, false, $context);
        $result = json_decode($json_result);

        return $result->success;
    }

    public function index($product_slug = null)
    {
        if ($this->request->is('post')) {
            $data = $this->request->getData();

            if ($this->__checkRecaptchaResponse($data['g-recaptcha-response'])) {
                $name_slug = $this->Products->getSlugById($data['product_id']);

                $query = $this->Queries->newEntity([
                    'first_name' => h(strip_tags($data['first_name'])),
                    'last_name' => h(strip_tags($data['last_name'])),
                    'message' => h(strip_tags($data['message'])),
                    'email' => $data['email'],
                    'mobile' => $data['mobile'],
                    'product_id' => $data['product_id'],
                    'color' => $data['color'],
                    'dealer_id' => $data['dealer_id']
                ]);

                if ($this->Queries->save($query)) {
                    // Query data saved
                    $this->Flash->success('Query submitted successfully!');

                    // Send SMS
                    $phone = '88' . $data['mobile'];
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                        CURLOPT_URL => "http://api.infobip.com/sms/1/text/single",
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => "",
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 3000,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => "POST",
                        CURLOPT_POSTFIELDS => json_encode([
                            "from" => "aamraSMS",
                            "to" => $phone,
                            "text" => "Welcome to the Honda world. Thank you for your interest in " . $name_slug['name'] . ". We will contact you very soon."
                        ]),
                        CURLOPT_HTTPHEADER => [
                            "accept: application/json",
                            "authorization: Basic " . base64_encode('HondaBD:abcd123456'),
                            "content-type: application/json"
                        ],
                    ]);

                    $response = curl_exec($curl);
                    $err = curl_error($curl);
                    curl_close($curl);

                    // Send email
                    $dealer = $this->Dealers->get($data['dealer_id']);
                    $message = sprintf(
                        "<b>Name:</b> %s %s<br><b>Email:</b> %s<br><b>Mobile:</b> %s<br><b>Product:</b> %s<br><b>Selected Color:</b> %s<br><b>Dealer Name:</b> %s<br><b>Dealer Address:</b> %s<br><b>Message:</b> %s",
                        $data['first_name'],
                        $data['last_name'],
                        $data['email'],
                        $data['mobile'],
                        $name_slug['name'],
                        $data['color'],
                        $dealer['name'],
                        $dealer['address'],
                        $data['message']
                    );

                    $email = new Email();
                    $email->setFrom([$data['email'] => $data['first_name'] . ' ' . $data['last_name']])
                        ->setTo('bhlfb@bdhonda.com')
                        ->setCc($dealer['email'])
                        ->setSubject($name_slug['name'] . ' Enquiry form')
                        ->setEmailFormat('html')
                        ->send($message);

                    $this->Flash->success('Welcome to the Honda world. Thank you for your interest in ' . $name_slug['name'] . '. We will contact you very soon.');
                    return $this->redirect($this->referer());
                } else {
                    $this->Flash->error('Query not submitted!');
                }
            } else {
                $this->Flash->error('Captcha verification failed!');
                return $this->redirect(['controller' => 'Queries', 'action' => 'index', $name_slug['slug']]);
            }
        } else {
            $this->set('page_title', 'CB Hornet 160R Enquiry form');
            $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
            $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike, CB HORNET 160R');

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



    public function smsTest()
    {
        $ch = curl_init();
        $url = "https://smsportal.bangladeshinfo.com/api/send/BDHONDA/45d9fefc66a994044321adcd54786dc5/?text=API%20TEST&mobileNumber=01787693094";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);

        echo $output;
        exit();
    }

    /**
     * ------------- Admin section -------------
     */
    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Queries');

        $queriesTable = TableRegistry::getTableLocator()->get('Queries');
        $queries = $queriesTable->find()
            ->contain(['Dealers', 'Products'])
            ->limit(200)
            ->all();
        // dd($queries);
        $this->set(compact('queries'));
    }
}
