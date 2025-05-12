<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class JobsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name and primary key
        $this->setTable('jobs');
        $this->setPrimaryKey('id');

        // Define relationships
        $this->hasMany('Applicants', [
            'foreignKey' => 'job_id',
        ]);
    }

    /**
     * Get Job by ID.
     *
     * @param int|null $id
     * @return \Cake\Datasource\EntityInterface|null
     */
    public function getJobById(?int $id)
    {
        return $this->find()
            ->where(['id' => $id])
            ->first();
    }

    /**
     * Get all Jobs ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllJobs(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten Jobs ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenJobs(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Validation rules.
     *
     * @param \Cake\Validation\Validator $validator
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        // Example validation rules for jobs
        $validator
            ->scalar('name', 'Name must be a string.')
            ->maxLength('name', 255, 'Name cannot exceed 255 characters.')
            ->requirePresence('name', 'create')
            ->notEmptyString('name', 'Name is required.');

        return $validator;
    }
}
