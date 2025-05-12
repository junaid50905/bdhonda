<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class DivisionsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name
        $this->setTable('divisions');
        $this->setPrimaryKey('id');

        // Associations
        $this->hasMany('Districts', [
            'foreignKey' => 'division_id',
        ]);
        $this->hasMany('Dealers', [
            'foreignKey' => 'division_id',
        ]);
    }

    /**
     * Get Division by ID.
     *
     * @param int|null $id
     * @return array|null
     */
    public function getDivisionById(?int $id): ?array
    {
        $result = $this->find()
            ->where(['id' => $id])
            ->first();

        return $result ? $result->toArray() : null;
    }

    /**
     * Get all Divisions ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllDivisions(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten Divisions ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenDivisions(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }
}
