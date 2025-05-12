<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateTransmissions extends BaseMigration
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
        $table = $this->table('transmissions');
        $table->addColumn('product_id', 'integer', [
            'null' => false,
            'comment' => 'ID of the associated product'
        ])
            ->addColumn('transmission_type', 'string', [
                'limit' => 100,
                'null' => true,
                'default' => null,
                'comment' => 'Type of transmission (e.g., automatic, manual)'
            ])
            ->addColumn('no_of_gears', 'string', [
                'limit' => 100,
                'null' => true,
                'default' => null,
                'comment' => 'Number of gears'
            ])
            ->addColumn('gear_pattern', 'string', [
                'limit' => 100,
                'null' => true,
                'default' => null,
                'comment' => 'Gear pattern details'
            ])
            ->addColumn('max_speed', 'string', [
                'limit' => 100,
                'null' => true,
                'default' => null,
                'comment' => 'Maximum speed'
            ])
            ->addColumn('status', 'integer', [
                'null' => false,
                'default' => 1,
                'comment' => 'Status of the transmission record'
            ])
            ->addColumn('created_by', 'string', [
                'limit' => 50,
                'null' => true,
                'default' => null,
                'comment' => 'User who created the record'
            ])
            ->addColumn('modified_by', 'string', [
                'limit' => 50,
                'null' => true,
                'default' => null,
                'comment' => 'User who last modified the record'
            ])
            ->addColumn('created', 'datetime', [
                'null' => true,
                'default' => null,
                'comment' => 'Timestamp when the record was created'
            ])
            ->addColumn('modified', 'timestamp', [
                'null' => false,
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP',
                'comment' => 'Timestamp when the record was last modified'
            ])
            ->create();
    }
}
