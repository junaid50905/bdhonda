<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;




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

    public function addDealer()
    {

        $dealer = $this->Dealers->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            dd($data);

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
