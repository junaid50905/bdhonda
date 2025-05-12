<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class BodyDimensionsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Table name
        $this->setTable('body_dimensions');

        // Primary key
        $this->setPrimaryKey('id');

        // Associations
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->requirePresence('product_id', 'create')
            ->notEmptyString('product_id', 'Product ID is required.');

        return $validator;
    }

    /**
     * Get a Body Dimension by ID
     *
     * @param int $id
     * @return array|null
     */
    public function getBodyDimensionById(int $id): ?array
    {
        $result = $this->find()
            ->where(['BodyDimensions.id' => $id])
            ->contain(['Products'])
            ->first();

        return $result ? $result->toArray() : null;
    }

    /**
     * Get all Body Dimensions
     *
     * @return array
     */
    public function getAllBodyDimensions(): array
    {
        return $this->find('all', [
            'order' => ['BodyDimensions.created' => 'DESC']
        ])->toArray();
    }

    /**
     * Get the last ten Body Dimensions
     *
     * @return array
     */
    public function getLastTenBodyDimensions(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['BodyDimensions.created' => 'DESC']
        ])->toArray();
    }
}

