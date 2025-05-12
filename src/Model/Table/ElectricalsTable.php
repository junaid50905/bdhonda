<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class ElectricalsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name and primary key
        $this->setTable('electricals');
        $this->setPrimaryKey('id');

        // Associations
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
        ]);
    }

    /**
     * Get Electrical by ID.
     *
     * @param int|null $id
     * @return array|null
     */
    public function getElectricalById(?int $id): ?array
    {
        $result = $this->find()
            ->where(['id' => $id])
            ->first();

        return $result ? $result->toArray() : null;
    }

    /**
     * Get all Electricals ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllElectricals(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten Electricals ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenElectricals(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }
}
