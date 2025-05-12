<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;


class AccessoryTypesController extends Controller
{


    /**
     * ------------- Admin section ---------
     */

    

    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Accessory Types');

        $accessoryTypes = $this->AccessoryTypes->find()
            ->select(['AccessoryTypes.id', 'AccessoryTypes.name', 'AccessoryTypes.status'])
            ->order(['AccessoryTypes.created' => 'ASC'])
            ->all();

        $this->set('accessory_types', $accessoryTypes);
    }
}
