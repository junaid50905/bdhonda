<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class TyresBrakesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tyres_brakes');  // Specify the database table
        $this->setDisplayField('id');     // Field to be displayed as a label
        $this->setPrimaryKey('id');       // Primary key for the table

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

        return $validator;
    }

    /**
     * Get a TyresBrake by ID.
     */
    public function getTyresBrakeById(int $id): ?array
    {
        return $this->find('all', [
            'conditions' => ['id' => $id],
        ])
            ->first()
            ?->toArray();
    }

    /**
     * Get all TyresBrakes.
     */
    public function getAllTyresBrakes(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])
            ->all()
            ->toArray();
    }

    /**
     * Get the last 10 TyresBrakes.
     */
    public function getLastTenTyresBrakes(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])
            ->all()
            ->toArray();
    }
}
