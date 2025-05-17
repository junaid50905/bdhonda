<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;

class PartPricesController extends AppController
{


    /**
     * --------- Admin section ---------------
     */
    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Part Prices');

        $partPrices = $this->PartPrices->find()
            ->select(['id', 'name', 'part_number', 'price'])
            ->limit(10)
            ->all();

        $this->set('partPrices', $partPrices); // Use 'partPrices' here
    }


    public function add()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new part');

        $productsTable = $this->getTableLocator()->get('Products');
        $products = $productsTable->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ])->toArray();

        $partPricesTable = TableRegistry::getTableLocator()->get('PartPrices');

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            $partPriceEntity = $partPricesTable->newEmptyEntity();

            $partPriceEntity = $partPricesTable->patchEntity($partPriceEntity, [
                'product_id' => $data['product_id'],
                'name' => $data['name'],
                'part_number' => $data['part_number'],
                'price' => $data['price'],
                'status' => 1,
            ]);

            if ($partPricesTable->save($partPriceEntity)) {
                $this->Flash->success(__('New part added successfully.'));
                return $this->redirect(['action' => 'allList']);
            } else {
                $this->Flash->error(__('Failed to add new part.'));
            }
        }

        $this->set(compact('products'));
    }


    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Edit Part Price');

        $productsTable = $this->getTableLocator()->get('Products');
        $products = $productsTable->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ])->toArray();

        $partPricesTable = $this->getTableLocator()->get('PartPrices');

        if (!$id || !is_numeric($id)) {
            $this->Flash->error(__('Invalid Part Price ID.'));
            return $this->redirect(['action' => 'allList']);
        }

        $partPriceEntity = $partPricesTable->get($id);

        if ($this->request->is(['post', 'put', 'patch'])) {
            $data = $this->request->getData();

            $partPriceEntity = $partPricesTable->patchEntity($partPriceEntity, [
                'product_id' => $data['product_id'],
                'name' => $data['name'],
                'part_number' => $data['part_number'],
                'price' => $data['price'],
            ]);

            if ($partPricesTable->save($partPriceEntity)) {
                $this->Flash->success(__('Part Price updated successfully.'));
                return $this->redirect(['action' => 'allList']);
            } else {
                $this->Flash->error(__('Failed to update part price.'));
            }
        }

        $this->set(compact('products', 'partPriceEntity'));
    }
}
