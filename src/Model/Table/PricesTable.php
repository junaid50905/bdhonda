<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PricesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set the table name
        $this->setTable('prices');

        // Set the display field
        $this->setDisplayField('id');

        // Set the primary key
        $this->setPrimaryKey('id');

        // Define relationships
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Validation rules for Prices.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->integer('product_id')
            ->requirePresence('product_id', 'create')
            ->notEmptyString('product_id', 'Product ID is required.');

        return $validator;
    }

    /**
     * Get Price by ID.
     *
     * @param int|null $id
     * @return \Cake\Datasource\EntityInterface|null
     */
    public function getPriceById(?int $id)
    {
        return $this->find()
            ->where(['id' => $id])
            ->first();
    }

    /**
     * Get all Prices ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllPrices(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten Prices ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenPrices(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }
}
