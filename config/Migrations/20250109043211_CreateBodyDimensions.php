<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBodyDimensions extends BaseMigration
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
        $table = $this->table('body_dimensions');
        $table->addColumn('product_id', 'integer', ['null' => false])
            ->addColumn('length', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('width', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('height', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('wheel_base', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('ground_clearance', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('kerb_weight', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('fuel_tank_capacity', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('status', 'integer', ['default' => 1, 'null' => false])
            ->addColumn('created_by', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('modified_by', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('created', 'datetime', ['null' => true])
            ->addColumn('modified', 'timestamp', ['default' => 'CURRENT_TIMESTAMP', 'null' => false])
            ->create();
    }
}
