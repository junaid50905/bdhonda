<?php

namespace App\Controller;

use App\Controller\AppController;

class TestRidesController extends AppController
{
    /**
     * ---------- Admin section -------------
     */
    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Test Rides');

        $testRides = $this->TestRides->find()
            ->contain(['Products', 'Dealers'])
            ->limit(200)
            ->order(['TestRides.created' => 'DESC'])
            ->all();

        $this->set(compact('testRides'));
    }
}
