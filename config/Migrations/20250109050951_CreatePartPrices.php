<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreatePartPrices extends BaseMigration
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
        $table = $this->table('part_prices');
        $table->addColumn('product_id', 'integer', ['null' => false])
            ->addColumn('part_number', 'string', ['limit' => 255, 'null' => true, 'default' => null])
            ->addColumn('name', 'string', ['limit' => 255, 'null' => true, 'default' => null])
            ->addColumn('price', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('status', 'integer', ['null' => false, 'default' => 1])
            ->addColumn('created_by', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('modified_by', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('created', 'datetime', ['null' => true, 'default' => null])
            ->addColumn('modified', 'timestamp', [
                'null' => false,
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP',
            ])
            ->create();
    }
}
