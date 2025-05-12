<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dashboards Controller
 *
 */
class DashboardsController extends AppController
{
    // public $name = "Dashboards";
    // public $uses = array();

    public function index()
    {
        $this->viewBuilder()->setLayout('admin_layout');

        $this->set('page_title', 'Dashboard');
    }


}
