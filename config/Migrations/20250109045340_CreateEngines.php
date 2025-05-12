<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateEngines extends BaseMigration
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
        $table = $this->table('engines');
        $table->addColumn('product_id', 'integer', ['null' => false])
            ->addColumn('type', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('displacement', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('max_net_power', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('max_net_torque', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('bore', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('stroke', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('compression_ratio', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('air_filter_type', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('starting_method', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('status', 'integer', ['null' => false, 'default' => 1])
            ->addColumn('created_by', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('modified_by', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('created', 'datetime', ['null' => true, 'default' => null])
            ->addColumn('modified', 'timestamp', ['null' => false, 'default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
