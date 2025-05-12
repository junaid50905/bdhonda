<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateAccessories extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('accessories');
        $table->addColumn('product_id', 'integer', ['null' => false])
            ->addColumn('accessory_types_id', 'integer', ['null' => false])
            ->addColumn('name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('image', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('description', 'text', ['null' => true])
            ->addColumn('price', 'integer', ['null' => false])
            ->addColumn('status', 'integer', ['default' => 1, 'null' => false])
            ->addColumn('created_by', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('modified_by', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('created', 'datetime', ['null' => true])
            ->addColumn('modified', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP',
                'null' => false
            ])
            ->create();

    }
}
