<?php
declare(strict_types=1);

namespace App\Controller;

use Authentication\Controller\Component\AuthenticationComponent;


/**
 * Dashboards Controller
 *
 */
class DashboardsController extends AppController
{
    // public $name = "Dashboards";
    // public $uses = array();

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Authentication.Authentication');
    }

    // public function beforeFilter(\Cake\Event\EventInterface $event)
    // {
    //     parent::beforeFilter($event);

    //     // Allow unauthenticated access to login or public methods
    //     $this->Authentication->addUnauthenticatedActions(['login']);
    // }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        if ($this->request->getAttribute('identity') === null) {
            return $this->redirect('/users/login');
        }
    }


    public function index()
    {
        $this->viewBuilder()->setLayout('admin_layout');

        $this->set('page_title', 'Dashboard');
    }


}
