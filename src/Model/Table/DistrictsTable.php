<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class DistrictsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name
        $this->setTable('districts');
        $this->setPrimaryKey('id');

        // Associations
        $this->hasMany('Upazilas', [
            'foreignKey' => 'district_id',
        ]);
        $this->hasMany('Dealers', [
            'foreignKey' => 'district_id',
        ]);
    }

    /**
     * Get District by ID.
     *
     * @param int|null $id
     * @return array|null
     */
    public function getDistrictById(?int $id): ?array
    {
        $result = $this->find()
            ->where(['id' => $id])
            ->first();

        return $result ? $result->toArray() : null;
    }

    /**
     * Get all Districts ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllDistricts(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten Districts ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenDistricts(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }
}
