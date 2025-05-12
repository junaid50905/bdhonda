<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class FeedbackTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name and primary key
        $this->setTable('feedback');
        $this->setPrimaryKey('id');
    }

    /**
     * Get Feedback by ID.
     *
     * @param int|null $id
     * @return \Cake\Datasource\EntityInterface|null
     */
    public function getFeedbackById(?int $id)
    {
        return $this->find()
            ->where(['id' => $id])
            ->first();
    }

    /**
     * Get all Feedback records ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllFeedback(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten Feedback records ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenFeedback(): array
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
        $validator
            ->scalar('name')
            ->minLength('name', 3, 'Name must be at least 3 characters long.')
            ->requirePresence('name', 'create')
            ->notEmptyString('name', 'Name is required.');

        $validator
            ->scalar('mobile')
            ->numeric('mobile', 'Phone must be numeric.')
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile', 'Phone number is required.');

        $validator
            ->scalar('email')
            ->email('email', false, 'Please supply a valid email address.')
            ->requirePresence('email', 'create')
            ->notEmptyString('email', 'Email is required.');

        return $validator;
    }
}
