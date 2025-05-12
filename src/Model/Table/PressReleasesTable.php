<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PressReleasesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set the table name
        $this->setTable('press_releases');

        // Set the display field (optional)
        $this->setDisplayField('id');

        // Set the primary key
        $this->setPrimaryKey('id');

        // Attach behavior for file uploads
        // $this->addBehavior('Upload.Upload', [
        //     'pr_file' => [
        //         'fields' => [
        //             'dir' => 'file_dir',
        //         ],
        //     ],
        // ]);
    }

    /**
     * Validation rules for PressReleases.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->allowEmptyFile('pr_file')
            ->scalar('pr_file')
            ->add('pr_file', 'file', [
                'rule' => ['mimeType', ['image/jpeg', 'image/jpg', 'application/pdf']],
                'message' => 'Only JPEG images or PDF files are allowed.',
            ]);

        return $validator;
    }


    /**
     * Get PressRelease by ID.
     *
     * @param int|null $id
     * @return \Cake\Datasource\EntityInterface|null
     */
    public function getPressReleaseById(?int $id)
    {
        return $this->find()
            ->where(['id' => $id])
            ->first();
    }

    /**
     * Get all PressReleases ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllPressReleases(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten PressReleases ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenPressReleases(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }
}
