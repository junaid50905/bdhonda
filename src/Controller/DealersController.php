<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Client;
use Cake\Core\Configure;




class DealersController extends AppController
{
    protected $District;
    protected $Upazila;
    protected $Dealers;

    public function initialize(): void
    {
        parent::initialize();
        $this->District = TableRegistry::getTableLocator()->get('districts');
        $this->Upazila = TableRegistry::getTableLocator()->get('upazilas');
        $this->Dealers = TableRegistry::getTableLocator()->get('dealers');
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        // Allow public access to this action
        $this->Authentication->addUnauthenticatedActions(['dealerLocator', 'thankYou', 'applyForDealership']);
    }    


    public function dealerLocator()
    {
        $this->set('page_title', 'Dealer Locator');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');
        $divisionTable = TableRegistry::getTableLocator()->get('divisions');
        $divisions = $divisionTable->find()->all();
        $this->set('divisions', $divisions);
    }

    public function thankYou()
    {
        $this->set('page_title', 'Apply for Dealership');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');
    }


    public function applyForDealership()
    {
        $this->set('page_title', 'Apply for Dealership');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        $districtsTable = TableRegistry::getTableLocator()->get('Districts');
        $districts = $districtsTable->find('list')->toArray();

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            // CAPTCHA validation
            $recaptchaSecret = Configure::read('recaptcha.secret_key');
            $recaptchaResponse = $data['g-recaptcha-response'];

            $http = new Client();
            $verifyResponse = $http->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $recaptchaSecret,
                'response' => $recaptchaResponse,
                'remoteip' => $this->request->clientIp()
            ]);

            $responseData = $verifyResponse->getJson();

            if (!empty($responseData['success']) && $responseData['success'] == true) {
                // Get IP Address
                $data['created_ip'] = $this->request->clientIp();

                // Load DealerApplications Table
                $dealerApplicationsTable = $this->fetchTable('DealerApplications');

                // Create new entity
                $dealerApplication = $dealerApplicationsTable->newEntity($data);

                // Save the application
                if ($dealerApplicationsTable->save($dealerApplication)) {
                    $this->Flash->success('Your application has been submitted successfully!');
                    return $this->redirect($this->referer());
                } else {
                    $this->Flash->error('There was an error submitting your application. Please try again.');
                    return $this->redirect($this->referer());
                }
            } else {
                $this->Flash->error('Captcha validation failed. Please try again.');
            }
        }

        $this->set(compact('districts'));
    }

    /**
     * ---------- Admin section -------------
     */

    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Dealers/Parts Providers');

        $dealers = $this->getTableLocator()->get('Dealers')->find('all')->toArray();

        $this->set(compact('dealers'));
    }

    public function add()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new dealer');


        $DivisionsTable = $this->fetchTable('Divisions');

        // Fetch the divisions as an array (id => name)
        $divisions = $DivisionsTable->find('list', [
            'keyField' => 'id',
            'valueField' => 'name',
            'order' => ['name' => 'ASC']
        ])->toArray();

        $this->set(compact('divisions'));
    }

    // src/Controller/DealersController.php

    public function getDistricts()
    {
        $this->request->allowMethod(['ajax']);
        $divisionId = $this->request->getQuery('division_id');

        // Access the Districts table without using loadModel
        $districtsTable = TableRegistry::getTableLocator()->get('Districts');

        $districts = $districtsTable
            ->find('list', ['keyField' => 'id', 'valueField' => 'name'])
            ->where(['division_id' => $divisionId])
            ->toArray();

        $this->response = $this->response
            ->withType('application/json')
            ->withStringBody(json_encode($districts));
        return $this->response;
    }
    public function getUpazilas()
    {
        $this->request->allowMethod(['ajax']);
        $districtId = $this->request->getQuery('district_id');

        // Fix spelling: Upazilas
        $upazilaTable = TableRegistry::getTableLocator()->get('Upazilas');

        $upazilas = $upazilaTable
            ->find('list', ['keyField' => 'id', 'valueField' => 'name'])
            ->where(['district_id' => $districtId])
            ->toArray();

        $this->response = $this->response
            ->withType('application/json')
            ->withStringBody(json_encode($upazilas));
        return $this->response;
    }
    public function getDealers()
    {
        $this->request->allowMethod(['ajax']);
        $upazilaId = $this->request->getQuery('upazila_id');

        $dealersTable = TableRegistry::getTableLocator()->get('Dealers');

        $dealers = $dealersTable
            ->find('list', ['keyField' => 'id', 'valueField' => 'name'])
            ->where(['upazila_id' => $upazilaId])
            ->toArray();

        $this->response = $this->response
            ->withType('application/json')
            ->withStringBody(json_encode($dealers));

        return $this->response;
    }
    public function getAllDealers()
    {
        $this->request->allowMethod(['ajax']);
        $divisionId = $this->request->getQuery('division_id');
        $districtId = $this->request->getQuery('district_id');
        $upazilaId = $this->request->getQuery('upazila_id');

        $dealersTable = TableRegistry::getTableLocator()->get('Dealers');

        $query = $dealersTable->find()
            ->where([
                'division_id' => $divisionId,
                'district_id' => $districtId,
                'upazila_id' => $upazilaId
            ]);
        $dealers = $query->all();

        $this->response = $this->response
            ->withType('application/json')
            ->withStringBody(json_encode($dealers));

        return $this->response;
    }

    public function addDistrict()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new district');

        $district = $this->District->newEmptyEntity();

        if ($this->request->is('post')) {
            // Get file first and store temporarily
            $data = $this->request->getData();

            // dd($data);

            // Patch other form data
            $district = $this->District->patchEntity($district, $data);

            // Add additional fields
            $district->created = date('Y-m-d H:i:s');
            $district->modified = date('Y-m-d H:i:s');
            $district->division_id = $data['division_id'];
            $district->name = $data['name'];
            $district->status = 1;
            $district->created_by = null;
            $district->modified_by = null;



            if ($this->District->save($district)) {
                $this->Flash->success(__('Added new district successfully.'));
                return $this->redirect(['action' => 'add']);
            }

            $this->Flash->error(__('Unable to save the press release.'));
        }

        $this->set(compact('district'));

    }

    public function addUpazila()
    {

        $upazila = $this->Upazila->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            $upazila = $this->Upazila->patchEntity($upazila, $data);

            if ($this->Upazila->save($upazila)) {
                $this->Flash->success(__('Upazila has been saved successfully.'));
                return $this->redirect($this->referer());
            } else {
                $this->Flash->error(__('Unable to add upazila. Please try again.'));
            }
        }

        $this->set(compact('upazila'));
    }

    // public function addDealer()
    // {

    //     $dealer = $this->Dealers->newEmptyEntity();

    //     if ($this->request->is('post')) {
    //         $data = $this->request->getData();
    //         dd($data);


    //     }

    // }

    public function addDealer()
    {
        $dealer = $this->Dealers->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            // Handle image upload
            if (!empty($data['temp_image']) && $data['temp_image']->getClientFilename()) {
                $image = $data['temp_image'];
                $imageName = time() . '_' . $image->getClientFilename();
                $targetPath = WWW_ROOT . 'assets/public/images/network/dealers/' . $imageName;

                // Move uploaded file
                $image->moveTo($targetPath);

                // Save image name in DB
                $data['photo'] = $imageName;
                $data['created'] = date('Y-m-d H:i:s');
            }

            // Remove temp_image from data before saving
            unset($data['temp_image']);

            $dealer = $this->Dealers->patchEntity($dealer, $data);

            if ($this->Dealers->save($dealer)) {
                $this->Flash->success(__('Dealer has been saved.'));
                return $this->redirect(['action' => 'allList']);
            } else {
                $this->Flash->error(__('Unable to save dealer. Please try again.'));
            }
        }

        $this->set(compact('dealer'));
    }

    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Edit dealer');

        $dealer = $this->Dealers->get($id);

        if ($this->request->is(['post', 'put'])) {
            $data = $this->request->getData();

            // Handle image upload if new image is uploaded
            if (!empty($data['temp_image']) && $data['temp_image']->getClientFilename()) {
                $image = $data['temp_image'];
                $imageName = time() . '_' . $image->getClientFilename();
                $image->moveTo(WWW_ROOT . 'assets/public/images/network/dealers/' . $imageName);
                $data['photo'] = $imageName;

                // Optionally remove the old image
                if (!empty($dealer->image) && file_exists(WWW_ROOT . 'assets/public/images/network/dealers/' . $dealer->image)) {
                    unlink(WWW_ROOT . 'assets/public/images/network/dealers/' . $dealer->image);
                }
            } else {
                unset($data['temp_image']); // prevent overwriting the image field
            }

            $dealer = $this->Dealers->patchEntity($dealer, $data);

            if ($this->Dealers->save($dealer)) {
                $this->Flash->success(__('Dealer has been updated successfully.'));
                return $this->redirect(['action' => 'allList']);
            }

            $this->Flash->error(__('Unable to update dealer. Please try again.'));
        }

        $divisions = $this->Dealers->Divisions->find('list')->toArray();
        $districts = $this->Dealers->Districts->find('list', ['conditions' => ['division_id' => $dealer->division_id]])->toArray();
        $upazilas = $this->Dealers->Upazilas->find('list', ['conditions' => ['district_id' => $dealer->district_id]])->toArray();

        $this->set(compact('dealer', 'divisions', 'districts', 'upazilas'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $dealer = $this->Dealers->get($id);

        // Delete the image from server if exists
        if (!empty($dealer->image)) {
            $imagePath = WWW_ROOT . 'assets/public/images/network/dealers/' . $dealer->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        if ($this->Dealers->delete($dealer)) {
            $this->Flash->success(__('The dealer has been deleted.'));
        } else {
            $this->Flash->error(__('The dealer could not be deleted. Please try again.'));
        }

        return $this->redirect(['action' => 'allList']);
    }

    public function ajaxDistrictsByDivision($divisionId)
    {
        return 'something';
        // $this->request->allowMethod(['get']);
        // $this->autoRender = false;

        // $districts = $this->District->find('list', [
        //     'keyField' => 'id',
        //     'valueField' => 'name',
        //     'conditions' => ['division_id' => $divisionId]
        // ])->toArray();

        // // Output plain <option> list
        // header('Content-Type: text/html; charset=utf-8');

        // echo '<option value="">Select District</option>';
        // foreach ($districts as $id => $name) {
        //     echo '<option value="' . h($id) . '">' . h($name) . '</option>';
        // }
        // return;
    }

    public function allApplicationList()
    {
        // Set page title
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Dealer Applications');

        // Corrected model name
        $dealerApplications = $this->getTableLocator()->get('DealerApplications') // Correctly load the DealerApplicationsTable
            ->find()
            ->contain(['Districts', 'Upazilas'])
            ->all();
        $this->set(compact('dealerApplications'));
    }
}
