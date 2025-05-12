<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class DealersController extends AppController
{
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
