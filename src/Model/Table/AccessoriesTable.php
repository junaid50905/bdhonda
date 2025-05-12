<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class AccessoriesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Table name
        $this->setTable('accessories');

        // Primary key
        $this->setPrimaryKey('id');

        // Associations
        $this->belongsTo('AccessoryTypes', [
            'foreignKey' => 'accessory_types_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);

    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }

    public function getAccessoryById(int $id): ?array
    {
        $result = $this->find('all', [
            'conditions' => ['Accessories.id' => $id],
            'contain' => ['AccessoryTypes'],
        ])->first();

        return $result ? $result->toArray() : null;
    }

    public function getProductWiseAccessories(int $productId): array
    {
        $query = $this->find('all', [
            'select' => [
                'Accessories.id',
                'Accessories.product_id',
                'Accessories.accessory_types_id',
                'Accessories.name',
                'Accessories.image',
                'Accessories.description',
                'Accessories.price',
                'Accessories.status',
                'Accessories.created_by',
                'Accessories.modified_by',
                'Accessories.created',
                'Accessories.modified',
                'AccessoryTypes.id',
                'AccessoryTypes.name',
                'AccessoryTypes.status',
                'AccessoryTypes.created_by',
                'AccessoryTypes.modified_by',
                'AccessoryTypes.created',
                'AccessoryTypes.modified',
            ],
            'join' => [
                [
                    'table' => 'accessory_types',
                    'alias' => 'AccessoryTypes',
                    'type' => 'LEFT',
                    'conditions' => 'Accessories.accessory_types_id = AccessoryTypes.id',
                ],
            ],
            'conditions' => [
                'OR' => [
                    'Accessories.product_id' => 0,
                    'Accessories.product_id' => $productId,
                ],
            ],
            'order' => ['Accessories.created' => 'DESC', 'Accessories.accessory_types_id' => 'DESC'],
        ]);

        return $query->toArray();
    }

    public function getAllAccessories(): array
    {
        return $this->find('all', [
            'order' => ['Accessories.created' => 'DESC'],
        ])->toArray();
    }

    public function getLastTenAccessories(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['Accessories.created' => 'DESC'],
        ])->toArray();
    }
}
