<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class AccessoryTypesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Table name
        $this->setTable('accessory_types');

        // Primary key
        $this->setPrimaryKey('id');

        // Associations
        $this->hasMany('Accessories', [
            'foreignKey' => 'accessory_types_id',
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

    public function getAccessoryTypeById(int $id): ?array
    {
        $result = $this->find()
            ->where(['AccessoryTypes.id' => $id])
            ->contain(['Accessories'])
            ->first();

        return $result ? $result->toArray() : null;
    }

    public function getAllAccessoryTypes(): array
    {
        return $this->find('all', [
            'order' => ['AccessoryTypes.created' => 'DESC']
        ])->toArray();
    }

    public function getLastTenAccessoryTypes(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['AccessoryTypes.created' => 'DESC']
        ])->toArray();
    }
}
