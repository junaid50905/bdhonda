<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateTyresBrakes extends BaseMigration
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
        $table = $this->table('tyres_brakes');
        $table->addColumn('product_id', 'integer', [
            'null' => false,
            'comment' => 'ID of the associated product'
        ])
            ->addColumn('tyre_size_front', 'string', [
                'limit' => 100,
                'null' => true,
                'default' => null,
                'comment' => 'Front tyre size'
            ])
            ->addColumn('tyre_size_rear', 'string', [
                'limit' => 100,
                'null' => true,
                'default' => null,
                'comment' => 'Rear tyre size'
            ])
            ->addColumn('tyre_type_front', 'string', [
                'limit' => 100,
                'null' => true,
                'default' => null,
                'comment' => 'Front tyre type'
            ])
            ->addColumn('tyre_type_rear', 'string', [
                'limit' => 100,
                'null' => true,
                'default' => null,
                'comment' => 'Rear tyre type'
            ])
            ->addColumn('brake_type_size_front', 'string', [
                'limit' => 100,
                'null' => true,
                'default' => null,
                'comment' => 'Front brake type and size'
            ])
            ->addColumn('brake_type_size_rear', 'string', [
                'limit' => 100,
                'null' => true,
                'default' => null,
                'comment' => 'Rear brake type and size'
            ])
            ->addColumn('status', 'integer', [
                'null' => false,
                'default' => 1,
                'comment' => 'Status of the tyre and brake record'
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
