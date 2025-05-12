<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class FramesSuspensionsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name and primary key
        $this->setTable('frames_suspensions');
        $this->setPrimaryKey('id');

        // Define relationships
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Get FramesSuspension by ID.
     *
     * @param int|null $id
     * @return \Cake\Datasource\EntityInterface|null
     */
    public function getFramesSuspensionById(?int $id)
    {
        return $this->find()
            ->where(['id' => $id])
            ->first();
    }

    /**
     * Get all FramesSuspension records ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllFramesSuspensions(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten FramesSuspension records ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenFramesSuspensions(): array
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
            ->integer('product_id', 'Product ID must be an integer.')
            ->requirePresence('product_id', 'create')
            ->notEmptyString('product_id', 'Product ID is required.');

        return $validator;
    }
}
