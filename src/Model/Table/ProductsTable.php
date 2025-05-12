<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class ProductsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // Set the table name
        $this->setTable('products');

        // Set the display field
        $this->setDisplayField('name');

        // Set the primary key
        $this->setPrimaryKey('id');

        // Define associations
        $this->hasMany('Colors', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('Prices', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('Features', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('BodyDimensions', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('Engines', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('Transmissions', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('TyresBrakes', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('FramesSuspensions', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('Electricals', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('Accessories', [
            'foreignKey' => 'product_id',
        ]);
    }

    /**
     * Validation rules.
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('name', 'Product name is required')
            ->maxLength('name', 255, 'Product name cannot exceed 255 characters');

        return $validator;
    }

    /**
     * Get a product by ID.
     */
    public function getProductById(?int $id)
    {
        return $this->find()
            ->where(['id' => $id])
            ->first();
    }

    /**
     * Get the slug and name of a product by ID.
     */
    public function getSlugById(?int $id)
    {
        return $this->find()
            ->select(['slug', 'name'])
            ->where(['id' => $id])
            ->first();
    }

    /**
     * Get a product by slug.
     */
    // public function getProductBySlug(?string $slug)
    // {
    //     return $this->find()
    //         ->where(['slug' => $slug])
    //         ->first();
    // }
    public function getProductBySlug($slug = null)
    {
        $result = $this->find()
            ->where(['Products.slug' => $slug])
            ->first();

        return $result ?: false;
    }

    /**
     * Get a product ID and name by slug.
     */
    public function getProductIdBySlug(?string $slug)
    {
        return $this->find()
            ->select(['id', 'name'])
            ->where(['slug' => $slug])
            ->first();
    }

    /**
     * Get all products ordered by creation date (descending).
     */
    public function getAllProducts(): array
    {
        return $this->find()
            ->orderBy(['created' => 'DESC'])
            ->toArray();
    }

    /**
     * Get the last ten products ordered by creation date (descending).
     */
    public function getLastTenProducts(): array
    {
        return $this->find()
            ->limit(10)
            ->orderBy(['created' => 'DESC'])
            ->toArray();
    }
}
