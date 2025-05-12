<?php
declare(strict_types=1);

namespace App\Controller;

// use League\Container\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\ORM\TableRegistry;
use Cake\Http\Exception\NotFoundException;


/**
 * Media Controller
 *
 */
class MediaController extends AppController
{
    protected $PressRelease;
    protected $Event;

    public function initialize(): void
    {
        parent::initialize();
        $this->PressRelease = TableRegistry::getTableLocator()->get('PressReleases');
        $this->Event = TableRegistry::getTableLocator()->get('Events');
    }

    /**
     * mediaPressRelease
     */
    public function pressRelease()
    {
        $this->set('page_title', 'Press Release');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        $press_releases = $this->fetchTable('PressReleases')
            ->find()
            ->select(['id', 'title', 'pr_file', 'file_dir', 'publish_date'])
            ->orderBy(['publish_date' => 'DESC'])
            ->all();

        $this->set(compact('press_releases'));

    }

    /**
     * prDetails
     */
    // public function prDetails($id = null)
    // {
    //     $this->set('page_title', 'Press Release Details');
    //     $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
    //     $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

    //     // Get the current URL and extract the ID from the last segment
    //     // $uriSegments = explode('/', $this->request->getRequestTarget());

    //     // $idjunaid = h(strip_tags(end($uriSegments)));

    //     // Find the press release by ID
    //     // $pressRelease = $this->PressReleases->find('all')
    //     // ->where(['PressReleases.id' => $id])
    //     // ->first();

    //     $pressReleasesTable = TableRegistry::getTableLocator()->get('press_releases');
    //     $pressRelease = $pressReleasesTable->find()
    //         ->where([
    //             'id' => $id,
    //         ])
    //         ->first();

    //     dd($pressRelease);
    //     if ($pressRelease) {
    //         $this->set('prDetails', $pressRelease);
    //     } else {
    //         throw new NotFoundException(__('Press release not found'));
    //     }
    // }
    public function prDetails($id = null)
    {

        // Set meta details
        $this->set('page_title', 'Press Release Details');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        // Sanitize the ID
        $id = h(strip_tags($id));


        // Load the PressReleases table
        $pressReleasesTable = $this->fetchTable('PressReleases');

        // Find the press release by ID
        $pressRelease = $pressReleasesTable->find()
        ->where(['id' => $id])
        ->first();

        if ($pressRelease) {
            // Pass the press release details to the view
            $this->set('prDetails', $pressRelease);
        } else {
            // If no press release is found, throw a 404 error
            throw new NotFoundException(__('Press release not found'));
        }
    }

    /**
     * events
     */
    public function events()
    {
        $this->set('page_title', 'Events');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        $events = $this->fetchTable('Events')
            ->find()
            ->orderBy(['Events.created' => 'DESC'])
            ->all();
        $this->set('events', $events);
    }

    /**
     * eventDetails
     */
    public function eventDetails($id = null)
    {
        // Set metadata for the page
        $this->set('page_title', 'Event Details');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        // Check if the event ID is valid
        if ($id) {
            // Fetch the event details
            $eventDetails = $this->fetchTable('Events')
                ->find()
                ->where(['Events.id' => $id])
                ->first();
            $this->set(compact('eventDetails'));
        } else {
            // Redirect to error page if no valid event ID is found
            // return $this->redirect(['controller' => 'Errors', 'action' => 'error404']);
            dd('error');
        }
    }


    /**
     * gallery
     */
    public function gallery()
    {
        $this->set('page_title', 'Gallery');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');
        // $this->set('press_releases', $this->PressRelease->find('list', array('fields' => array('PressRelease.title', 'PressRelease.pr_file', 'PressRelease.publish_date'))));
    }




    /**
     * ------------ Admin Section --------------
     *
     */

    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Media Center');

        $press_releases = $this->PressRelease->find()->orderBy(['publish_date' => 'DESC'])->all();;
        $events = $this->Event->find('all')->toArray();

        $this->set(compact('press_releases'));
        $this->set(compact('events'));

    }

    /**
     * pressReleaseAdd
     */
    public function pressReleaseAdd()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add Press Release');

        $press_release = $this->PressRelease->newEmptyEntity();

        if ($this->request->is('post')) {
            // Get file first and store temporarily
            $file = $this->request->getData('pr_file');
            $data = $this->request->getData();

            // Remove file from patchEntity to avoid the error
            unset($data['pr_file']);

            // Patch other form data
            $press_release = $this->PressRelease->patchEntity($press_release, $data);

            // Add additional fields
            $press_release->created = date('Y-m-d H:i:s');
            $press_release->modified = date('Y-m-d H:i:s');
            $press_release->status = 1;
            $press_release->created_by = null;
            $press_release->modified_by = null;

            // Handle file upload if present
            if ($file && $file->getError() === UPLOAD_ERR_OK) {
                $fileName = uniqid() . '_' . $file->getClientFilename();

                // Calculate file_dir
                $lastFileDir = $this->PressRelease->find()
                    ->select(['file_dir'])
                    ->order(['id' => 'DESC'])
                    ->first();
                $fileDir = $lastFileDir ? $lastFileDir->file_dir + 1 : 1;

                $uploadPath = WWW_ROOT . 'files/press_release/pr_file/' . $fileDir;
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                $targetPath = $uploadPath . DS . $fileName;
                $file->moveTo($targetPath);

                $press_release->pr_file = $fileName;
                $press_release->file_dir = $fileDir;
            }

            if ($this->PressRelease->save($press_release)) {
                $this->Flash->success(__('The press release has been saved.'));
                return $this->redirect(['action' => 'allList']);
            }

            $this->Flash->error(__('Unable to save the press release.'));
        }

        $this->set(compact('press_release'));
    }

    /**
     * pressReleaseEdit
     */
    public function pressReleaseEdit($id)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Edit Press Release');

        // Fetch the existing press release data
        $press_release = $this->PressRelease->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            // Get file first and store temporarily
            $file = $data['pr_file'] ?? null;

            // Patch other form data (excluding the file)
            unset($data['pr_file']);
            $press_release = $this->PressRelease->patchEntity($press_release, $data);

            // Add additional fields
            $press_release->created = date('Y-m-d H:i:s');
            $press_release->modified = date('Y-m-d H:i:s');
            $press_release->status = 1;
            $press_release->created_by = null;
            $press_release->modified_by = null;

            // Handle file upload if new file is uploaded
            if ($file && $file->getError() === UPLOAD_ERR_OK) {
                // Delete previous file if exists
                $previousFilePath = WWW_ROOT . 'files/press_release/pr_file/' . $press_release->file_dir . DS . $press_release->pr_file;
                if (file_exists($previousFilePath)) {
                    unlink($previousFilePath); // Remove the old file
                }

                $fileName = uniqid() . '_' . $file->getClientFilename();

                $uploadPath = WWW_ROOT . 'files/press_release/pr_file/' . $press_release->file_dir;
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0777, true); // Ensure directory exists
                }

                $targetPath = $uploadPath . DS . $fileName;
                $file->moveTo($targetPath);

                // Update the entity with new file info
                $press_release->pr_file = $fileName;
                $press_release->file_dir = $press_release->file_dir;
            }

            // Save the updated press release
            if ($this->PressRelease->save($press_release)) {
                $this->Flash->success(__('The press release has been updated.'));
                return $this->redirect(['action' => 'allList']);
            }

            $this->Flash->error(__('Unable to update the press release.'));
        }

        // Set the press release data to the view
        $this->set(compact('press_release'));
    }    


}
