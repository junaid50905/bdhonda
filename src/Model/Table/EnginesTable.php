<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class EnginesTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name and primary key
        $this->setTable('engines');
        $this->setPrimaryKey('id');

        // Associations
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
        ]);
    }

    /**
     * Get Engine by ID.
     *
     * @param int|null $id
     * @return array|null
     */
    public function getEngineById(?int $id): ?array
    {
        $result = $this->find()
            ->where(['id' => $id])
            ->first();

        return $result ? $result->toArray() : null;
    }

    /**
     * Get all Engines ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllEngines(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten Engines ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenEngines(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }
}
