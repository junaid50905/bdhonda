<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ColorsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Table name
        $this->setTable('colors');

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
            ->requirePresence('name', 'create')
            ->notEmptyString('name', 'Color name is required.');

        $validator
            ->requirePresence('product_id', 'create')
            ->notEmptyString('product_id', 'Product ID is required.');

        return $validator;
    }

    /**
     * Get a Color by ID
     *
     * @param int $id
     * @return array|null
     */
    public function getColorById(int $id): ?array
    {
        $result = $this->find()
            ->where(['Colors.id' => $id])
            ->contain(['Products'])
            ->first();

        return $result ? $result->toArray() : null;
    }

    /**
     * Get all Colors
     *
     * @return array
     */
    public function getAllColors(): array
    {
        return $this->find('all', [
            'order' => ['Colors.created' => 'DESC']
        ])->toArray();
    }

    /**
     * Get the last ten Colors
     *
     * @return array
     */
    public function getLastTenColors(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['Colors.created' => 'DESC']
        ])->toArray();
    }
}
