<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class DealerApplicationsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name
        $this->setTable('dealer_applications');
        $this->setPrimaryKey('id');

        // Associations with Districts and Upazilas
        $this->belongsTo('Districts', [
            'foreignKey' => 'district_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Upazilas', [
            'foreignKey' => 'upazila_id',
            'joinType' => 'INNER',
        ]);
        
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->minLength('name', 3, 'Last Name must be at least 3 characters long.')
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('mobile')
            ->numeric('mobile', 'Mobile number must be numeric.')
            ->lengthBetween('mobile', [11, 11], 'Mobile number must be of 11 digits.')
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile')
            ->add('mobile', 'isUnique', [
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => 'You already submitted a Dealer Application with this mobile number.'
            ]);

        $validator
            ->email('email', false, 'Please supply a valid email address.')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'isUnique', [
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => 'You already submitted a Dealer Application with this email.'
            ]);

        return $validator;
    }

    public function getDealerApplicationById(int $id): ?array
    {
        $result = $this->find()
            ->where(['id' => $id])
            ->first();

        return $result ? $result->toArray() : null;
    }

    public function getAllDealerApplication(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC']
        ])->toArray();
    }

    public function getLastTenDealerApplication(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC']
        ])->toArray();
    }
}
