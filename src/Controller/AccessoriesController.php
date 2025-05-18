<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Utility\Text;
use Cake\Filesystem\Filesystem;


class AccessoriesController extends Controller
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
        $this->set('page_title', 'Accessories');

        $accessories = $this->Accessories->find()
            ->contain(['AccessoryTypes', 'Products']) // Include products here
            ->orderBy(['Accessories.created' => 'ASC'])
            ->all();

        $this->set(compact('accessories'));
    }

    // public function add()
    // {
    //     $this->viewBuilder()->setLayout('admin_layout');
    //     $this->set('page_title', 'Accessories');

    //     $productsTable = $this->getTableLocator()->get('Products');
    //     $products = $productsTable->find('list', [
    //         'keyField' => 'id',
    //         'valueField' => 'name'
    //     ])->toArray();

    //     $accessoryTypeTable = $this->getTableLocator()->get('AccessoryTypes');
    //     $accessory_types = $accessoryTypeTable->find('list', [
    //         'keyField' => 'id',
    //         'valueField' => 'name'
    //     ])->toArray();

    //     $accessoriesTable = TableRegistry::getTableLocator()->get('Accessories');

    //     if ($this->request->is('post')) {
    //         $data = $this->request->getData();
    //         $accessoriesEntity = $accessoriesTable->newEmptyEntity();
    //         $accessoriesEntity = $accessoriesTable->patchEntity($accessoriesEntity, [
    //             'product_id' => $data['product_id'],
    //             'accessory_types_id' => $data['accessory_types_id'],
    //             'name' => $data['name'],
    //             'description' => $data['description'],
    //             'price' => $data['price'],
    //             'status' => 1,
    //         ]);

    //         // Handle image upload if available
    //         if (!empty($data['temp_image']) && $data['temp_image']->getError() === 0) {
    //             $image = $data['temp_image'];
    //             $imageName = uniqid() . '-' . $image->getClientFilename();
    //             $image->moveTo(WWW_ROOT . 'assets/public/images/accessories/' . $imageName);
    //             $data['image'] = $imageName; // Assuming 'image' is the DB column
    //         }

    //         // Save product
    //         $accessories = $this->Accessories->patchEntity($product, $data);

    //         if ($this->Accessories->save($product)) {
    //             $this->Flash->success(__('Product has been saved successfully.'));
    //             return $this->redirect(['action' => 'allList']);
    //         } else {
    //             $this->Flash->error(__('Unable to save the product. Please try again.'));
    //         }
    //     }


    //     $this->set(compact('products', 'accessory_types'));
    // }


    public function add()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Accessories');

        $productsTable = $this->getTableLocator()->get('Products');
        $accessoryTypesTable = $this->getTableLocator()->get('AccessoryTypes');
        $accessoriesTable = $this->getTableLocator()->get('Accessories');

        $products = $productsTable->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ])->toArray();

        $accessory_types = $accessoryTypesTable->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ])->toArray();

        $accessory = $accessoriesTable->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            // Handle image upload
            if (!empty($data['temp_image']) && $data['temp_image']->getError() === UPLOAD_ERR_OK) {
                $image = $data['temp_image'];
                $imageName = Text::uuid() . '-' . $image->getClientFilename();
                $targetPath = WWW_ROOT . 'assets/public/images/accessories/' . $imageName;

                // Ensure directory exists
                if (!file_exists(dirname($targetPath))) {
                    mkdir(dirname($targetPath), 0775, true);
                }

                // Move uploaded file
                $image->moveTo($targetPath);

                // Add image name to data
                $data['image'] = $imageName;
            }

            // Remove temp_image field
            unset($data['temp_image']);

            // Add default status
            $data['status'] = 1;

            $accessory = $accessoriesTable->patchEntity($accessory, $data);

            if ($accessoriesTable->save($accessory)) {
                $this->Flash->success(__('New accessory added successfully.'));
                return $this->redirect(['action' => 'allList']);
            } else {
                $this->Flash->error(__('Failed to add new accessory.'));
            }
        }

        $this->set(compact('accessory', 'products', 'accessory_types'));
    }


    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Edit Accessory');

        $productsTable = $this->getTableLocator()->get('Products');
        $accessoryTypesTable = $this->getTableLocator()->get('AccessoryTypes');
        $accessoriesTable = $this->getTableLocator()->get('Accessories');

        $products = $productsTable->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ])->toArray();

        $accessory_types = $accessoryTypesTable->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ])->toArray();

        $accessory = $accessoriesTable->get($id);

        if ($this->request->is(['post', 'put', 'patch'])) {
            $data = $this->request->getData();

            // Handle image upload
            if (!empty($data['temp_image']) && $data['temp_image']->getError() === UPLOAD_ERR_OK) {
                $image = $data['temp_image'];
                $imageName = Text::uuid() . '-' . $image->getClientFilename();
                $targetPath = WWW_ROOT . 'assets/public/images/accessories/' . $imageName;

                // Ensure directory exists
                if (!file_exists(dirname($targetPath))) {
                    mkdir(dirname($targetPath), 0775, true);
                }

                $image->moveTo($targetPath);
                $data['image'] = $imageName;
            }

            unset($data['temp_image']);

            $accessory = $accessoriesTable->patchEntity($accessory, $data);

            if ($accessoriesTable->save($accessory)) {
                $this->Flash->success(__('Accessory updated successfully.'));
                return $this->redirect(['action' => 'allList']);
            } else {
                $this->Flash->error(__('Failed to update accessory.'));
            }
        }

        $this->set(compact('accessory', 'products', 'accessory_types'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $accessory = $this->Accessories->get($id);

        // Delete image from folder if it exists
        if (!empty($accessory->image)) {
            $imagePath = WWW_ROOT . 'assets/public/images/accessories/' . $accessory->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        if ($this->Accessories->delete($accessory)) {
            $this->Flash->success(__('The accessory has been deleted.'));
        } else {
            $this->Flash->error(__('The accessory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'allList']);
    }
}
