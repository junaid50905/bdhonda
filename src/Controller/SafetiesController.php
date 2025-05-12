<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;



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
    }

    /**
     * This controller uses the Safety model
     *
     * @var string[]
     */
    // public function initialize(): void
    // {
    //     parent::initialize();
    //     $this->loadComponent('Flash');
    //     $this->loadComponent('Upload');
    //     $this->loadComponent('Img');

    //     // Allow public access to these actions
    //     $this->Auth->allow(['safetyApproach', 'safetyInitiatives', 'safetyEducation']);
    // }

    // public function beforeFilter(EventInterface $event)
    // {
    //     parent::beforeFilter($event);
    // }

    /**
     * Admin Section
     */
    // public function allList()
    // {
    //     $this->set('page_title', 'Safeties');

    //     // Fetch data using pagination
    //     $query = $this->Safety->find('all');
    //     $paginator = new Paginator(); // Initialize Paginator
    //     $safeties = $paginator->paginate($query); // Apply pagination to the query

    //     // Set paginated results to the view
    //     $this->set(compact('safeties'));

    //     // Set other view variables
    //     $this->set('activity_picture', $this->Safety->getAllActivityPicture());
    //     $this->set('pdsa', $this->Safety->getAllPdsa());
    //     $this->set('education', $this->Safety->getAllEducation());
    // }

    // public function add($accessoryId = null, $model = null)
    // {
    //     $safety = null;

    //     if (!$model && $accessoryId) {
    //         // Edit mode: $accessoryId exists, model is false
    //         $id = h(strip_tags($accessoryId));
    //         if (is_numeric($id)) {
    //             $safety = $this->Safety->findById($id);
    //             if ($safety) {
    //                 $this->set(compact('safety'));
    //             }
    //         }
    //     }

    //     // Handle form submission
    //     if ($this->request->is('post') && !empty($this->request->getData('Safety'))) {
    //         $data = $this->request->getData('Safety');

    //         // Handle image upload
    //         if (!empty($data['temp_image'])) {
    //             $newName = $this->generateRandomString();
    //             $uploadResult = $this->uploadImage($newName, $data['temp_image'], ['uploadTo' => 'safeties/' . $data['safety_category']]);
    //             if ($uploadResult) {
    //                 $data['image'] = $uploadResult;
    //             }
    //         }

    //         if (!empty($data['id'])) {
    //             $this->Safety->id = $data['id'];
    //         }

    //         if ($this->Safety->save($data)) {
    //             $this->Flash->success('Safety saved successfully!');
    //             return $this->redirect(['action' => 'allList']);
    //         } else {
    //             $this->Flash->error('Safety not saved!');
    //         }
    //     }

    //     $this->set(compact('model', 'page_title'));
    //     $this->set('safety_category', $model);
    //     $this->set('page_title', 'Safeties');
    // }

    // public function delete($id = null)
    // {
    //     if (!$id) {
    //         throw new NotFoundException('Invalid Safety');
    //     }

    //     $this->Safety->id = $id;
    //     if ($this->Safety->delete()) {
    //         $this->Flash->success('Safety deleted successfully!');
    //     } else {
    //         $this->Flash->error('Safety not deleted!');
    //     }

    //     return $this->redirect(['action' => 'allList']);
    // }

    // private function generateRandomString($length = 15): string
    // {
    //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //     return substr(str_shuffle(str_repeat($characters, ceil($length / strlen($characters)))), 1, $length);
    // }

    // private function uploadImage($newName, $document, $options = []): ?string
    // {
    //     $ext = pathinfo($document->getClientFilename(), PATHINFO_EXTENSION);
    //     $fileName = $newName . '.' . $ext;
    //     $targetDir = WWW_ROOT . 'assets/public/images/' . $options['uploadTo'];
    //     $document->moveTo($targetDir . '/' . $fileName);

    //     if (file_exists($targetDir . '/' . $fileName)) {
    //         return $fileName;
    //     }
    //     return null;
    // }

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
    public function editActivityPicture($id)
    {
        echo $id;
    }

    public function pdsa()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new pdsa');
    }
    public function education()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new video');
    }

}
