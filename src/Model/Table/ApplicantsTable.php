<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ApplicantsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Table name
        $this->setTable('applicants');

        // Primary key
        $this->setPrimaryKey('id');

        // Associations
        $this->belongsTo('Jobs', [
            'foreignKey' => 'job_id',
            'joinType' => 'INNER',
        ]);

        // Behaviors
        // Ensure you have installed and configured the josegonzalez/cakephp-upload plugin before enabling this behavior.
        // Uncomment the following lines if the FileUpload behavior is installed.
        // $this->addBehavior('Josegonzalez/Upload.Upload', [
        //     'cv' => [
        //         'fields' => ['dir' => 'file_dir']
        //     ]
        // ]);
    }

    public function validationDefault(Validator $validator): Validator
    {
        // Validation for `first_name`
        $validator
            ->scalar('first_name')
            ->minLength('first_name', 1, 'First Name must be at least 1 character long.')
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        // Validation for `last_name`
        $validator
            ->scalar('last_name')
            ->minLength('last_name', 1, 'Last Name must be at least 1 character long.')
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        // Validation for `phone`
        $validator
            ->numeric('phone', 'Phone must be numeric.')
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone')
            ->add('phone', 'unique', [
                'rule' => ['validateUnique', ['scope' => ['phone', 'job_id']]],
                'provider' => 'table',
                'message' => 'You already applied for this job with this phone number.'
            ]);

        // Validation for `email`
        $validator
            ->email('email', false, 'Please supply a valid email address.')
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', [
                'rule' => ['validateUnique', ['scope' => ['email', 'job_id']]],
                'provider' => 'table',
                'message' => 'You already applied for this job with this email.'
            ]);

        // Validation for `cv` file
        $validator
            ->allowEmptyFile('cv')
            ->add('cv', 'fileSize', [
                'rule' => ['fileSize', '<=', '1MB'],
                'message' => 'Only upload PDF/doc/docx file and file size must be within 1MB.'
            ])
            ->add('cv', 'validMimeType', [
                'rule' => ['mimeType', ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document']],
                'message' => 'File is not a pdf or word document'
            ])
            ->add('cv', 'validExtension', [
                'rule' => ['extension', ['pdf', 'doc', 'docx']],
                'message' => 'File does not have a pdf, doc, or docx extension'
            ]);

        return $validator;
    }

    public function getApplicantById(int $id): ?array
    {
        $result = $this->find()
            ->where(['Applicants.id' => $id])
            ->contain(['Jobs'])
            ->first();

        return $result ? $result->toArray() : null;
    }

    public function getAllApplicants(): array
    {
        return $this->find('all', [
            'order' => ['Applicants.created' => 'DESC']
        ])->toArray();
    }

    public function getLastTenApplicants(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['Applicants.created' => 'DESC']
        ])->toArray();
    }
}
