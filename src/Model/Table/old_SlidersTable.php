<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class SlidersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sliders');
        $this->setDisplayField('name'); // Adjust this based on your table structure
        $this->setPrimaryKey('id');
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
            ->notEmptyString('name', 'A name is required.');

        $validator
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmptyFile('image');

        $validator
            ->dateTime('created')
            ->allowEmptyDateTime('created');

        $validator
            ->dateTime('modified')
            ->allowEmptyDateTime('modified');

        return $validator;
    }

    /**
     * Get Slider by ID
     */
    public function getSliderById(int $id): ?array
    {
        return $this->find('all', [
            'conditions' => ['id' => $id],
        ])
            ->first()
            ?->toArray(); // Use null-safe operator to handle `null`
    }

    /**
     * Get all sliders
     */
    public function getAllSliders(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'ASC'], // Specify order directly in find options
        ])
            ->all()
            ->toArray();
    }

    /**
     * Get the last 10 sliders
     */
    public function getLastTenSliders(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'], // Specify order directly in find options
        ])
            ->all()
            ->toArray();
    }
}
