<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class QueriesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('queries');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Dealers', [
            'foreignKey' => 'dealer_id',
        ]);

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
        ]);


    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('first_name')
            ->minLength('first_name', 1, 'First Name must be at least 1 character long.')
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->minLength('last_name', 1, 'Last Name must be at least 1 character long.')
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->numeric('mobile', 'Mobile number must be numeric.')
            ->requirePresence('mobile', 'create')
            ->notEmptyString('mobile')
            ->lengthBetween('mobile', [11, 11], 'Mobile number must be of 11 digits.');

        $validator
            ->email('email', false, 'Please supply a valid email address.')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        return $validator;
    }

    public function getQueryById(?int $id)
    {
        return $this->find()
            ->where(['id' => $id])
            ->first();
    }

    public function getAllQueries(): array
    {
        return $this->find()
            ->orderBy(['created' => 'DESC'])
            ->toArray();
    }

    public function getLastTenQueries(): array
    {
        return $this->find()
            ->limit(10)
            ->orderBy(['created' => 'DESC'])
            ->toArray();
    }
}
