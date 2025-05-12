<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class TestRidesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('test_rides');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        // Association with Products table
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER', // or 'LEFT' depending on your requirement
        ]);

        // Association with Dealers table
        $this->belongsTo('Dealers', [
            'foreignKey' => 'dealer_id',
            'joinType' => 'INNER', // or 'LEFT' depending on your requirement
        ]);
        
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('first_name')
            ->minLength('first_name', 1, 'First Name must be at least 1 character long.')
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name', 'First Name is required.');

        $validator
            ->scalar('last_name')
            ->minLength('last_name', 1, 'Last Name must be at least 1 character long.')
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name', 'Last Name is required.');

        $validator
            ->scalar('mobile')
            ->lengthBetween('mobile', [11, 11], 'Mobile number must be exactly 11 digits.')
            ->numeric('mobile', 'Mobile number must be numeric.')
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile', 'Mobile number is required.');

        $validator
            ->email('email', true, 'Please supply a valid email address.')
            ->requirePresence('email', 'create')
            ->notEmptyString('email', 'Email is required.');

        return $validator;
    }

    /**
     * Get a TestRide by ID.
     */
    public function getTestRideById(int $id): ?array
    {
        return $this->find('all', [
            'conditions' => ['id' => $id],
        ])
            ->first()
            ?->toArray();
    }

    /**
     * Get all TestRides.
     */
    public function getAllTestRides(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])
            ->all()
            ->toArray();
    }

    /**
     * Get the last 10 TestRides.
     */
    public function getLastTenTestRides(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])
            ->all()
            ->toArray();
    }
}
