<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class OnlineBookingsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name and primary key
        $this->setTable('online_bookings');
        $this->setPrimaryKey('id');


        // Association with Products table
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);

        // Association with Dealers table
        $this->belongsTo('Dealers', [
            'foreignKey' => 'dealer_id',
            'joinType' => 'INNER',
        ]);
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
            ->numeric('mobile', 'Mobile number must be numeric.')
            ->lengthBetween('mobile', [11, 11], 'Mobile number must be 11 digits long.')
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile', 'Mobile number is required.');

        $validator
            ->email('email', false, 'Please supply a valid email address.')
            ->requirePresence('email', 'create')
            ->notEmptyString('email', 'Email is required.');

        return $validator;
    }

    /**
     * Get OnlineBooking by ID.
     *
     * @param int|null $id
     * @return \Cake\Datasource\EntityInterface|null
     */
    public function getQueryById(?int $id)
    {
        return $this->find()
            ->where(['id' => $id])
            ->first();
    }

    /**
     * Get all OnlineBookings ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllQuery(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten OnlineBookings ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenQuery(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }
}
