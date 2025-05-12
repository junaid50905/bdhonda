<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\Validation\Validator;


class SafetiesTable extends Table
{
    /**
     * Initialize method
     * @param array $config Configuration options.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set the table associated with this model
        $this->setTable('safeties');

        // Set the primary key
        $this->setPrimaryKey('id');

        // Enable timestamps (created, modified fields)
        $this->addBehavior('Timestamp');
    }

    /**
     * Get all safety records of type "activity_picture"
     * @return \Cake\ORM\Query
     */
    public function getAllActivityPicture()
    {
        return $this->find()
        ->where(['safety_category' => 'activity_picture'])
        ->orderBy(['created' => 'ASC'])
        ->select(['id', 'name', 'image', 'safety_category', 'order', 'status'])
        ->toArray();

    }

    /**
     * Get all safety records of type "pdsa"
     * @return \Cake\ORM\Query
     */
    public function getAllPdsa()
    {
        return $this->find()
        ->where(['safety_category' => 'pdsa'])
        ->orderBy(['created' => 'ASC'])
        ->select(['id', 'name', 'image', 'safety_category', 'order', 'status'])
        ->toArray();
    }

    /**
     * Get all safety records of type "education"
     * @return \Cake\ORM\Query
     */
    public function getAllEducation()
    {
        return $this->find()
        ->where(['safety_category' => 'education'])
        ->orderBy(['created' => 'ASC'])
        ->select(['id', 'name', 'image', 'safety_category', 'order', 'status'])
        ->toArray();
    }

    /**
     * Get active safety records of type "activity_picture"
     * @return \Cake\ORM\Query
     */
    public function getActiveActivityPicture()
    {
        return $this->find()
            ->where([
                'safety_category' => 'activity_picture',
                'status' => 1
            ])
            ->orderBy(['created' => 'ASC'])
            ->select(['id', 'name', 'image', 'safety_category', 'order', 'status']);
    }

    /**
     * Get active safety records of type "pdsa"
     * @return \Cake\ORM\Query
     */
    public function getActivePdsa()
    {
        return $this->find()
            ->where([
                'safety_category' => 'pdsa',
                'status' => 1
            ])
            ->orderBy(['created' => 'ASC'])
            ->select(['id', 'image', 'safety_category', 'order', 'status']);
    }

    /**
     * Get active safety records of type "education"
     * @return \Cake\ORM\Query
     */
    public function getActiveEducation()
    {
        return $this->find()
            ->where([
                'safety_category' => 'education',
                'status' => 1
            ])
            ->orderBy(['order' => 'ASC'])
            ->select(['id', 'name', 'image', 'safety_category', 'order', 'status']);
    }
}
