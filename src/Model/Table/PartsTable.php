<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class PartsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set table name and primary key
        $this->setTable('parts');
        $this->setPrimaryKey('id');
    }

    /**
     * Get Part by ID.
     *
     * @param int|null $id
     * @return \Cake\Datasource\EntityInterface|null
     */
    public function getPartById(?int $id)
    {
        return $this->find()
            ->where(['id' => $id])
            ->first();
    }

    /**
     * Get all Parts ordered by creation date (descending).
     *
     * @return array
     */
    public function getAllParts(): array
    {
        return $this->find('all', [
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }

    /**
     * Get the last ten Parts ordered by creation date (descending).
     *
     * @return array
     */
    public function getLastTenParts(): array
    {
        return $this->find('all', [
            'limit' => 10,
            'order' => ['created' => 'DESC'],
        ])->toArray();
    }
}
