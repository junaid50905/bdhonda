<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;

use Cake\Http\Exception\NotFoundException;
use Cake\Utility\Text;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;


class SlidersController extends AppController
{
    protected $Sliders;

    public function initialize(): void
    {
        parent::initialize();
        $this->Sliders = TableRegistry::getTableLocator()->get('Sliders');
    }


    /**
     * ------------ Admin Section --------------
     *
     */

    // public function allList()
    // {
    //     $this->viewBuilder()->setLayout('admin_layout');

    //     $this->set('page_title', 'Sliders');
    //     $sliders = $this->Sliders->find('all');
    //     dd($sliders);
    //     $this->set(compact('sliders'));
    // }
    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');

        // Set the page title
        $this->set('page_title', 'Homepage Sliders');


        // Fetching the sliders using CakePHP ORM
        $sliders = $this->Sliders
            ->find('all')
            ->select(['id', 'title', 'image', 'url', 'position', 'status'])
            ->orderBy(['position' => 'ASC'])
            ->toArray();
        // Pass the sliders to the view
        $this->set(compact('sliders'));
    }

    public function add()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new slider');

        // Create a new empty entity
        $slider = $this->Sliders->newEmptyEntity();

        if ($this->request->is('post')) {
            // Patch the entity with the request data
            $slider = $this->Sliders->patchEntity($slider, $this->request->getData());
            $image = $this->request->getData('image');
            if (!empty($image->getClientFilename())) {
                $imageName = time() . '-' . $image->getClientFilename();
                $uploadPath = WWW_ROOT . 'assets/public/images/home-banner/' . $imageName;
                $image->moveTo($uploadPath);
                $slider->image = $imageName;
            }
            if ($this->Sliders->save($slider)) {
                $this->Flash->success('The slider has been saved.');
                return $this->redirect(['action' => 'allList']);
            }
            // Otherwise, set an error message
            $this->Flash->error(__('Unable to add the slider.'));
        }

        // Set the slider to be available in the view
        $this->set(compact('slider'));
    }

    // public function edit($id)
    // {
    //     $this->viewBuilder()->setLayout('admin_layout');
    //     $this->set('page_title', 'Edit slider');

    //     $slider = $this->Sliders->get($id);
    //     if ($this->request->is(['post', 'put'])) {
    //         // Patch the entity with the request data
    //         $slider = $this->Sliders->patchEntity($slider, $this->request->getData());

    //         $image = $this->request->getData('image');
    //         if (!empty($image->getClientFilename())) {
    //             $imageName = time() . '-' . $image->getClientFilename();
    //             $uploadPath = WWW_ROOT . 'assets/public/images/home-banner/' . $imageName;
    //             $image->moveTo($uploadPath);
    //             $slider->image = $imageName;
    //         }
    //         if ($this->Sliders->save($slider)) {
    //             $this->Flash->success('The slider has been updated.');
    //             return $this->redirect(['action' => 'allList']);
    //         }
    //         // Otherwise, set an error message
    //         $this->Flash->error(__('Unable to add the slider.'));
    //     }
    //     $this->set(compact('slider'));
    // }
    // public function edit($id)
    // {
    //     $this->viewBuilder()->setLayout('admin_layout');
    //     $this->set('page_title', 'Edit Slider');

    //     // Fetch the slider data from the database
    //     $slider = $this->Sliders->get($id);

    //     if ($this->request->is(['post', 'put'])) {
    //         // Patch the entity with the form data
    //         $slider = $this->Sliders->patchEntity($slider, $this->request->getData());

    //         // Handle image upload if a new image is uploaded
    //         $image = $this->request->getData('image');
    //         if (!empty($image->getClientFilename())) {
    //             $imageName = time() . '-' . $image->getClientFilename(); // Generate a unique name for the image
    //             $uploadPath = WWW_ROOT . 'assets/public/images/home-banner/' . $imageName; // Define the upload path
    //             $image->moveTo($uploadPath); // Move the file to the destination folder
    //             $slider->image = $imageName; // Set the image name in the database
    //         }

    //         // Save the updated slider information
    //         if ($this->Sliders->save($slider)) {
    //             $this->Flash->success('The slider has been updated.');
    //             return $this->redirect(['action' => 'allList']);
    //         }
    //         $this->Flash->error(__('Unable to update the slider.'));
    //     }

    //     $this->set(compact('slider'));
    // }
    // public function edit($id)
    // {
    //     $this->viewBuilder()->setLayout('admin_layout');
    //     $this->set('page_title', 'Edit Slider');

    //     // Fetch the slider data from the database
    //     $slider = $this->Sliders->get($id);

    //     if ($this->request->is(['post', 'put'])) {
    //         // Patch the entity with the form data
    //         $updatedSliderData = $this->Sliders->patchEntity($slider, $this->request->getData());

    //         // Handle image upload if a new image is uploaded
    //         $image = $this->request->getData('image');
    //         if ($image) {
    //             $imageName = time() . '-' . $image->getClientFilename(); // Generate a unique name for the image
    //             $uploadPath = WWW_ROOT . 'assets/public/images/home-banner/' . $imageName; // Define the upload path
    //             $image->moveTo($uploadPath); // Move the file to the destination folder
    //             $slider->image = $imageName; // Set the image name in the database
    //         }

    //         // Save the updated slider information
    //         if ($this->Sliders->save($updatedSliderData)) {
    //             $this->Flash->success('The slider has been updated.');
    //             return $this->redirect(['action' => 'allList']);
    //         }
    //         $this->Flash->error(__('Unable to update the slider.'));
    //     }

    //     $this->set(compact('slider'));
    // }

    public function edit($id)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Edit Slider');

        // Fetch the slider data from the database
        $slider = $this->Sliders->get($id);

        if ($this->request->is(['post', 'put'])) {

            $updatedSliderData = $this->Sliders->patchEntity($slider, $this->request->getData());

            $image = $this->request->getData('image');
            if ($image) {
                $imageName = time() . '-' . $image->getClientFilename();
                $uploadPath = WWW_ROOT . 'assets/public/images/home-banner/' . $imageName;
                $image->moveTo($uploadPath);
                $slider->image = $imageName;

                // Save the updated slider information
                if ($this->Sliders->save($updatedSliderData)) {
                    $this->Flash->success('The slider has been updated.');
                    return $this->redirect(['action' => 'allList']);
                }
                $this->Flash->error(__('Unable to update the slider.'));
            }else{
                // Save the updated slider information
                if ($this->Sliders->save($updatedSliderData)) {
                    $this->Flash->success('The slider has been updated.');
                    return $this->redirect(['action' => 'allList']);
                }
                $this->Flash->error(__('Unable to update the slider.'));
            }


        }

        $this->set(compact('slider'));
    }

    // public function edit($id)
    // {
    //     $this->viewBuilder()->setLayout('admin_layout');
    //     $this->set('page_title', 'Edit Slider');

    //     // Fetch the slider data from the database
    //     $slider = $this->Sliders->get($id);

    //     if ($this->request->is(['post', 'put'])) {

    //         $updatedSliderData =  $this->request->getData();

    //         $image = $this->request->getData('image');

    //         if ($image && !$image->getError()) {
    //             $imageName = time() . '-' . $image->getClientFilename();
    //             $uploadPath = WWW_ROOT . 'assets/public/images/home-banner/' . $imageName;
    //             $image->moveTo($uploadPath);
    //             $updatedSliderData->image = $imageName;
    //         } else {
    //             unset($updatedSliderData->image);
    //         }

    //         if ($this->Sliders->save($updatedSliderData)) {
    //             $this->Flash->success('The slider has been updated.');
    //             return $this->redirect(['action' => 'allList']);
    //         }

    //         $this->Flash->error(__('Unable to update the slider.'));
    //     }

    //     $this->set(compact('slider'));
    // }






    // public function delete($id = null): void
    // {
    //     if (empty($id)) {
    //         throw new NotFoundException(__('Invalid Banner'));
    //     }

    //     $slider = $this->Sliders->get($id);
    //     if ($this->Sliders->delete($slider)) {
    //         $this->Flash->success(__('Slider deleted successfully!'));
    //     } else {
    //         $this->Flash->error(__('Slider not deleted!'));
    //     }

    //     return $this->redirect(['action' => 'allList']);
    // }

    // public function ajaxSliderSort(): void
    // {
    //     $this->request->allowMethod(['post']);

    //     $slider_ids = $this->request->getData('sortedIDs');
    //     $position = 1;

    //     foreach ($slider_ids as $slider_id) {
    //         $slider = $this->Sliders->get($slider_id);
    //         $slider->position = $position;
    //         $this->Sliders->save($slider);
    //         $position++;
    //     }

    //     $this->setResponse($this->getResponse()->withType('json')->withStringBody(json_encode($slider_ids)));
    // }

    // private function generateRandomString($length = 15): string
    // {
    //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //     return Text::uuid();
    // }

    // private function uploadImage($newName, $document, $special = null)
    // {
    //     $targetdir = WWW_ROOT . 'assets/public/images/' . $special['uploadTo'];
    //     $ext = pathinfo($document['name'], PATHINFO_EXTENSION);
    //     $origFile = $newName . '.' . $ext;
    //     $dst = $newName . '.' . $ext;

    //     $folder = new Folder($targetdir, true, 0755);
    //     $file = new File($document['tmp_name']);
    //     $file->copy($targetdir . DS . $origFile);

    //     return $dst;
    // }
}
