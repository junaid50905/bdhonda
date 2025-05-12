<?php

// src/Model/Table/DealersTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class DealersTable extends Table
{
    /**
     * Initialize method.
     *
     * @param array $config Configuration options.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('dealers');
        $this->setPrimaryKey('id');
        $this->setDisplayField('name');

        // Define associations
        $this->hasMany('Queries', [
            'foreignKey' => 'dealer_id',
        ]);

        $this->belongsTo('Divisions', [
            'foreignKey' => 'division_id',
        ]);

        $this->belongsTo('Districts', [
            'foreignKey' => 'district_id',
        ]);

        $this->belongsTo('Upazilas', [
            'foreignKey' => 'upazila_id',
        ]);
    }

    /**
     * Get dealer by ID.
     *
     * @param int|null $id Dealer ID.
     * @return \Cake\ORM\Entity|null
     */
    public function getDealerById($id = null)
    {
        return $this->get($id);
    }

    /**
     * Get all dealers.
     *
     * @return \Cake\ORM\Query
     */
    public function getAllDealers()
    {
        return $this->find()
            ->orderBy(['Dealers.created' => 'DESC']);
    }

    /**
     * Get the last ten dealers.
     *
     * @return \Cake\ORM\Query
     */
    public function getLastTenDealers()
    {
        return $this->find()
            ->limit(10)
            ->orderBy(['Dealers.created' => 'DESC']);
    }
}
