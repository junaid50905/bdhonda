<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class EventsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name and primary key
        $this->setTable('events');
        $this->setPrimaryKey('id');

        // // Behaviors
        // $this->addBehavior('Josegonzalez/Upload.Upload', [
        //     'image' => [
        //         'fields' => [
        //             'dir' => 'image_dir',
        //         ],
        //     ],
        //     'thumb_image' => [
        //         'fields' => [
        //             'dir' => 'image_dir',
        //         ],
        //     ],
        // ]);
    }

    /**
     * Get Event by ID.
     *
     * @param int|null $id
     * @return \Cake\Datasource\EntityInterface|null
     */
    public function getEventById(?int $id)
    {
        return $this->find()
            ->where(['id' => $id])
            ->first();
    }

    /**
     * Get all Events ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllEvent(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten Events ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenEvent(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])->toArray();
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
            ->requirePresence('image', 'create')
            ->notEmptyFile('image', 'An image file is required.')
            ->requirePresence('thumb_image', 'create')
            ->notEmptyFile('thumb_image', 'A thumbnail image is required.');

        return $validator;
    }
}
