<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;


class AccessoryTypesController extends Controller
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }


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
    public function add()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new accessory types');

        $accessoryType = $this->AccessoryTypes->newEmptyEntity();

        if ($this->request->is('post')) {
            $accessoryType = $this->AccessoryTypes->patchEntity($accessoryType, $this->request->getData());

            if ($this->AccessoryTypes->save($accessoryType)) {
                $this->Flash->success(__('Accessory Type has been saved.'));
                return $this->redirect(['action' => 'allList']);
            }
            $this->Flash->error(__('Unable to save Accessory Type.'));
        }

        $this->set(compact('accessoryType'));
    }
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Edit Accessory Type');

        $accessoryType = $this->AccessoryTypes->get($id);

        if ($this->request->is(['post', 'put', 'patch'])) {
            $accessoryType = $this->AccessoryTypes->patchEntity($accessoryType, $this->request->getData());

            if ($this->AccessoryTypes->save($accessoryType)) {
                $this->Flash->success(__('Accessory Type has been updated.'));
                return $this->redirect(['action' => 'allList']);
            }

            $this->Flash->error(__('Unable to update Accessory Type.'));
        }

        $this->set(compact('accessoryType'));
    }
}
