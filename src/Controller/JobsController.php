<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;


class JobsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }



    public function view($id = null)
    {
        $job = $this->Jobs->get($id, contain: ['Applicants']);
        $this->set(compact('job'));
    }

    /**
     * ----------- Admin Section -------------
     */

    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Jobs');

        $jobs = $this->Jobs->find();

        $this->set(compact('jobs'));
    }

    public function add()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new job');

        $job = $this->Jobs->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['created'] = date('Y-m-d H:i:s'); // Set the created datetime
            $job = $this->Jobs->patchEntity($job, $data);
            
            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['action' => 'allList']);
            }
            $this->Flash->error(__('The job could not be saved. Please, try again.'));
        }

        $this->set(compact('job'));
    }


    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Edit Job');

        $job = $this->Jobs->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $job = $this->Jobs->patchEntity($job, $this->request->getData());

            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been updated.'));

                return $this->redirect(['action' => 'allList']);
            }
            $this->Flash->error(__('The job could not be updated. Please, try again.'));
        }

        $this->set(compact('job'));
    }


    public function applicantList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Applicants');


        // Fetch applicants without any recursive data (no associations)
        $applicantsTable = TableRegistry::getTableLocator()->get('Applicants');
        $applicants = $applicantsTable->find()
            ->all();

        // Initialize the job titles array
        $jobTitles = [];

        // Fetch the job titles associated with each applicant
        foreach ($applicants as $applicant) {
            $jobDetail = $this->Jobs->find()
                ->where(['id' => $applicant->job_id])
                ->first();

            if ($jobDetail) {
                $jobTitles[] = $jobDetail->name;
            }
        }

        $this->set('applicants', $applicants);
        $this->set('job_titles', $jobTitles);
    }

    



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $job = $this->Jobs->get($id);
        if ($this->Jobs->delete($job)) {
            $this->Flash->success(__('The job has been deleted.'));
        } else {
            $this->Flash->error(__('The job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
