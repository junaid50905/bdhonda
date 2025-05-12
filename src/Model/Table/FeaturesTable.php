<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class FeaturesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name and primary key
        $this->setTable('features');
        $this->setPrimaryKey('id');

        // Associations
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Get Feature by ID.
     *
     * @param int|null $id
     * @return \Cake\Datasource\EntityInterface|null
     */
    public function getFeatureById(?int $id)
    {
        return $this->find()
            ->where(['id' => $id])
            ->first();
    }

    /**
     * Get all Features ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllFeatures(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten Features ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenFeatures(): array
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->requirePresence('product_id', 'create')
            ->notEmptyString('product_id', 'Product ID is required.');

        return $validator;
    }
}
