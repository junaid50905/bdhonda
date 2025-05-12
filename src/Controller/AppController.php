<?php
declare(strict_types=1);


namespace App\Controller;
use Cake\Event\EventInterface;


use Cake\Controller\Controller;


class AppController extends Controller
{
    public function beforeFilter(EventInterface $event)
    {
        if ($this->request->getParam('controller') === 'Dashboards') {
            $this->viewBuilder()->setLayout('admin_layout');
        } else {
            $this->viewBuilder()->setLayout('frontend_layout');
        }

        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['index', 'view']);
    }

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');

        // $this->viewBuilder()->setHelpers(['Html', 'Form', 'Webroot']);
        $this->viewBuilder()->setHelpers(['Html', 'Form']); // Removed Webroot helper


        // Default meta values
        $this->set('page_title', 'Default Page Title');
        $this->set('meta_description', 'Default meta description');
        $this->set('meta_keywords', 'default, keywords');

        $this->loadComponent('Flash');

        $mainMenuProducts = $this->fetchTable('Products')
        ->find()
        ->select(['slug', 'product_thumb'])
        ->where(['status' => 1])
        ->orderBy(['product_menu_order' => 'ASC'])
        ->all();

        $this->set(compact('mainMenuProducts'));
    }

}
