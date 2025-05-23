<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;
use Cake\Http\Exception\NotFoundException;




use Cake\ORM\TableRegistry;

/**
 * Safeties Controller
 */
class SafetiesController extends AppController
{
    protected $Safety;

    public function initialize(): void
    {
        parent::initialize();
        $this->Safety = TableRegistry::getTableLocator()->get('Safeties');
        $this->loadComponent('Authentication.Authentication');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Allow public access to this action
        $this->Authentication->addUnauthenticatedActions(['safetyApproach', 'safetyInitiatives', 'safetyEducation']);
    }

    public function safetyApproach()
    {
        $this->set('page_title', 'Safety Approach');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'YES Award, Honda Foundation, Honda, Vision & Mission, Y-E-S Award in Bangladesh, HONDA Y-E-S Award in Bangladesh, Stylish Bike');
    }

    public function safetyInitiatives()
    {
        $this->set('page_title', 'Safety Initiatives');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'YES Award, Honda Foundation, Honda, Vision & Mission, Y-E-S Award in Bangladesh, HONDA Y-E-S Award in Bangladesh, Stylish Bike');

        $safetyTable = TableRegistry::getTableLocator()->get('safeties');
        $activityPicture = $safetyTable->find()
            ->where([
                'safety_category' => 'activity_picture',
                'status' => 1
            ])
            ->orderBy(['created' => 'ASC'])
            ->select(['id', 'name', 'image', 'safety_category', 'order', 'status'])
            ->all();
        $pdsa = $safetyTable->find()
            ->where([
                'safety_category' => 'pdsa',
                'status' => 1
            ])
            ->orderBy(['created' => 'ASC'])
            ->select(['id', 'name', 'image', 'safety_category', 'order', 'status'])
            ->all();

        $this->set('activity_picture', $activityPicture);
        $this->set('pdsa', $pdsa);

    }

    public function safetyEducation()
    {
        $this->set('page_title', 'Safety Education');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'YES Award, Honda Foundation, Honda, Vision & Mission, Y-E-S Award in Bangladesh, HONDA Y-E-S Award in Bangladesh, Stylish Bike');

        $safetyTable = TableRegistry::getTableLocator()->get('Safeties');
        $education_videos = $safetyTable->find()
            ->where([
                'safety_category' => 'education',
                'status' => 1
            ])
            ->orderBy(['`order`' => 'ASC'])
            ->select(['id', 'name', 'image', 'safety_category', 'order', 'status'])
            ->all();
        $this->set('education_videos', $education_videos);
    }

    /**
     * ------------ Admin Section --------------
     *
     */

    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Safeties');

        $this->set('activity_picture', $this->Safeties->getAllActivityPicture());
        $this->set('pdsa', $this->Safeties->getAllPdsa());
        $this->set('education', $this->Safeties->getAllEducation());
    }
    public function activityPicture()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new activity picture');

        $activity_picture = $this->Safety->newEmptyEntity();

        if ($this->request->is('post')) {
            // Get file first and store temporarily
            $file = $this->request->getData('image');
            $data = $this->request->getData();

            // Remove file from patchEntity to avoid the error
            unset($data['image']);

            // Patch other form data
            $activity_picture = $this->Safety->patchEntity($activity_picture, $data);

            // Add additional fields
            $activity_picture->safety_category = 'activity_picture';
            $activity_picture->order = 1;
            $activity_picture->status = 1;
            $activity_picture->created_by = null;
            $activity_picture->modified_by = null;
            $activity_picture->created = date('Y-m-d H:i:s');
            $activity_picture->modified = date('Y-m-d H:i:s');

            // Handle file upload if present
            if ($file && $file->getError() === UPLOAD_ERR_OK) {
                $fileName = uniqid() . '_' . $file->getClientFilename();


                $uploadPath = WWW_ROOT . 'assets/public/images/safeties/activity_picture';
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                $targetPath = $uploadPath . DS . $fileName;
                $file->moveTo($targetPath);

                $activity_picture->image = $fileName;
                $activity_picture->name = $this->request->getData('title');
            }

            if ($this->Safety->save($activity_picture)) {
                $this->Flash->success(__('The activity picture has been saved.'));
                return $this->redirect(['action' => 'allList']);
            }

            $this->Flash->error(__('Unable to save the activity picture.'));
        }

        $this->set(compact('activity_picture'));
    }
    // public function editActivityPicture($id = null)
    // {
    //     $this->viewBuilder()->setLayout('admin_layout');
    //     $this->set('page_title', 'Edit Activity Picture');

    //     $activity_picture = $this->Safety->get($id);

    //     if ($this->request->is(['post', 'put', 'patch'])) {
    //         $file = $this->request->getData('image');
    //         $data = $this->request->getData();

    //         // Remove file from patchEntity
    //         unset($data['image']);

    //         $activity_picture = $this->Safety->patchEntity($activity_picture, $data);

    //         $activity_picture->modified = date('Y-m-d H:i:s');

    //         // Handle file upload if a new file is uploaded
    //         if ($file && $file->getError() === UPLOAD_ERR_OK) {
    //             // Delete old file
    //             if (!empty($activity_picture->image)) {
    //                 $oldPath = WWW_ROOT . 'assets/public/images/safeties/activity_picture/' . $activity_picture->image;
    //                 if (file_exists($oldPath)) {
    //                     unlink($oldPath);
    //                 }
    //             }

    //             // Save new file
    //             $fileName = uniqid() . '_' . $file->getClientFilename();
    //             $uploadPath = WWW_ROOT . 'assets/public/images/safeties/activity_picture';
    //             if (!is_dir($uploadPath)) {
    //                 mkdir($uploadPath, 0777, true);
    //             }
    //             $targetPath = $uploadPath . DS . $fileName;
    //             $file->moveTo($targetPath);

    //             $activity_picture->image = $fileName;
    //         }

    //         if ($this->Safety->save($activity_picture)) {
    //             $this->Flash->success(__('The activity picture has been updated.'));
    //             return $this->redirect(['action' => 'allList']);
    //         }

    //         $this->Flash->error(__('Unable to update the activity picture.'));
    //     }

    //     $this->set(compact('activity_picture'));
    // }
    public function editActivityPicture($id = null)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Edit activity picture');

        $activity_picture = $this->Safety->get($id);

        if ($this->request->is(['post', 'put', 'patch'])) {
            $data = $this->request->getData();
            $file = $data['image'] ?? null;
            unset($data['image']);

            // Patch other fields
            $activity_picture = $this->Safety->patchEntity($activity_picture, $data);
            $activity_picture->name = $data['title'] ?? $activity_picture->name;
            $activity_picture->modified = date('Y-m-d H:i:s');

            // Handle image upload if new file is provided
            if ($file && $file->getError() === UPLOAD_ERR_OK) {
                $uploadPath = WWW_ROOT . 'assets/public/images/safeties/activity_picture';
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                // Delete old image if exists
                if (!empty($activity_picture->image) && file_exists($uploadPath . DS . $activity_picture->image)) {
                    unlink($uploadPath . DS . $activity_picture->image);
                }

                $fileName = uniqid() . '_' . $file->getClientFilename();
                $file->moveTo($uploadPath . DS . $fileName);
                $activity_picture->image = $fileName;
            }

            if ($this->Safety->save($activity_picture)) {
                $this->Flash->success(__('The activity picture has been updated.'));
                return $this->redirect(['action' => 'allList']);
            }

            $this->Flash->error(__('Unable to update the activity picture.'));
        }

        $this->set(compact('activity_picture'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $safety = $this->Safeties->get($id);

        if ($this->Safeties->delete($safety)) {
            $this->Flash->success(__('Safety deleted successfully!'));
        } else {
            $this->Flash->error(__('Safety not deleted!'));
        }

        return $this->redirect(['action' => 'allList']);
    }

    public function pdsa()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new pdsa');

        $pdsa = $this->Safety->newEmptyEntity();

        if ($this->request->is('post')) {
            // Get file first and store temporarily
            $file = $this->request->getData('image');
            $data = $this->request->getData();

            // Remove file from patchEntity to avoid the error
            unset($data['image']);

            // Patch other form data
            $pdsa = $this->Safety->patchEntity($pdsa, $data);

            // Add additional fields
            $pdsa->safety_category = 'pdsa';
            $pdsa->order = 1;
            $pdsa->status = 1;
            $pdsa->created_by = null;
            $pdsa->modified_by = null;
            $pdsa->created = date('Y-m-d H:i:s');
            $pdsa->modified = date('Y-m-d H:i:s');

            // Handle file upload if present
            if ($file && $file->getError() === UPLOAD_ERR_OK) {
                $fileName = uniqid() . '_' . $file->getClientFilename();


                $uploadPath = WWW_ROOT . 'assets/public/images/safeties/pdsa';
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                $targetPath = $uploadPath . DS . $fileName;
                $file->moveTo($targetPath);

                $pdsa->image = $fileName;
                $pdsa->name = $this->request->getData('title');
            }

            if ($this->Safety->save($pdsa)) {
                $this->Flash->success(__('The pdsa picture has been saved.'));
                return $this->redirect(['action' => 'allList']);
            }

            $this->Flash->error(__('Unable to save the activity picture.'));
        }

        $this->set(compact('pdsa'));
    }

    public function editPdsa($id = null)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Edit PDSA picture');

        $pdsa = $this->Safety->get($id);

        if ($this->request->is(['post', 'put', 'patch'])) {
            $data = $this->request->getData();
            $file = $data['image'] ?? null;
            unset($data['image']);

            // Patch other fields
            $pdsa = $this->Safety->patchEntity($pdsa, $data);
            $pdsa->name = $data['title'] ?? $pdsa->name;
            $pdsa->modified = date('Y-m-d H:i:s');

            // Handle image upload if new file is provided
            if ($file && $file->getError() === UPLOAD_ERR_OK) {
                $uploadPath = WWW_ROOT . 'assets/public/images/safeties/pdsa';
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                // Delete old image if exists
                if (!empty($pdsa->image) && file_exists($uploadPath . DS . $pdsa->image)) {
                    unlink($uploadPath . DS . $pdsa->image);
                }

                $fileName = uniqid() . '_' . $file->getClientFilename();
                $file->moveTo($uploadPath . DS . $fileName);
                $pdsa->image = $fileName;
            }

            if ($this->Safety->save($pdsa)) {
                $this->Flash->success(__('The activity picture has been updated.'));
                return $this->redirect(['action' => 'allList']);
            }

            $this->Flash->error(__('Unable to update the activity picture.'));
        }

        $this->set(compact('pdsa'));
    }


    public function education()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new video');


        // Create a new entity
        $education = $this->Safety->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            $education = $this->Safety->patchEntity($education, $data);

            // Add additional fields
            $education->safety_category = 'education';
            $education->name = $this->request->getData('title') ?? null;
            $education->image = $data['image'] ?? null;
            $education->order = $data['order'] ?? null;
            $education->status = 1;
            $education->created_by = null;
            $education->modified_by = null;
            $education->created = date('Y-m-d H:i:s');
            $education->modified = date('Y-m-d H:i:s');


            if ($this->Safety->save($education)) {
                $this->Flash->success(__('Education video has been saved.'));
                return $this->redirect(['action' => 'allList']);
            } else {
                $this->Flash->error(__('Failed to save education video.'));
            }
        }

        $this->set(compact('education'));
    }

    public function editEducation($id = null)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Edit Education Video');

        // Load the entity
        $education = $this->Safety->get($id);

        if ($this->request->is(['post', 'put', 'patch'])) {
            $data = $this->request->getData();

            $education = $this->Safety->patchEntity($education, $data);

            // Add additional fields
            $education->name = $this->request->getData('title') ?? null;
            $education->image = $data['image'] ?? null;
            $education->order = $data['order'] ?? null;
            $education->status = $data['status'];
            $education->modified = date('Y-m-d H:i:s');

            if ($this->Safety->save($education)) {
                $this->Flash->success(__('Education video has been updated.'));
                return $this->redirect(['action' => 'allList']);
            } else {
                $this->Flash->error(__('Failed to update education video.'));
            }
        }

        $this->set(compact('education'));
    }
}
