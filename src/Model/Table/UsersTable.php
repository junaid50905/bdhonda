<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\EventInterface;
use Cake\Auth\DefaultPasswordHasher;


class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Define table name
        $this->setTable('users');
        $this->setDisplayField('username');
        $this->setPrimaryKey('id');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmptyString('username', 'Username is required.')
            ->add('username', [
                'alphaNumeric' => [
                    'rule' => 'alphaNumeric',
                    'message' => 'Letters and numbers only.',
                ],
                'isUnique' => [
                    'rule' => 'validateUnique',
                    'provider' => 'table',
                    'message' => 'This username has already been used.',
                ],
                'minLength' => [
                    'rule' => ['minLength', 3],
                    'message' => 'Username must be at least 3 characters long.',
                ],
            ]);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password', 'Password is required.')
            ->add('password', 'minLength', [
                'rule' => ['minLength', 5],
                'message' => 'Password must be at least 5 characters long.',
            ]);

        return $validator;
    }

    public function beforeSave(EventInterface $event, \ArrayObject $data, \ArrayObject $options): bool
    {
        if (!empty($data['password'])) {
            $hasher = new DefaultPasswordHasher();
            $data['password'] = $hasher->hash($data['password']);
        }

        return true;
    }
}
