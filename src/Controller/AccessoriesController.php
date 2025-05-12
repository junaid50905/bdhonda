<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;


class AccessoriesController extends Controller
{


    /**
     * ------------- Admin section ---------
     */
    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Accessories');

        $accessories = $this->Accessories->find()
            ->contain(['AccessoryTypes', 'Products']) // Include products here
            ->orderBy(['Accessories.created' => 'ASC'])
            ->all();

        $this->set(compact('accessories'));
    }
}
