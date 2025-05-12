<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UpazilasTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Define table name
        $this->setTable('upazilas');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        // Define associations
        $this->hasMany('Dealers', [
            'foreignKey' => 'upazila_id',
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
            ->notEmptyString('name', 'Upazila name is required.');

        return $validator;
    }

    /**
     * Get an Upazila by ID.
     *
     * @param int $id Upazila ID
     * @return array|null
     */
    public function getUpazilaById(int $id): ?array
    {
        return $this->find()
            ->where(['id' => $id])
            ->first()
            ?->toArray();
    }

    /**
     * Get all Upazilas.
     *
     * @return array
     */
    public function getAllUpazilas(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])
            ->all()
            ->toArray();
    }

    /**
     * Get the last 10 Upazilas.
     *
     * @return array
     */
    public function getLastTenUpazilas(): array
    {


        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])
            ->all()
            ->toArray();
    }
}
