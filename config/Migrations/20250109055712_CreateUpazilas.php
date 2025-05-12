<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateUpazilas extends BaseMigration
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
        $table = $this->table('upazilas');
        $table->addColumn('division_id', 'integer', [
            'null' => false,
            'comment' => 'ID of the associated division',
        ])
            ->addColumn('district_id', 'integer', [
                'null' => false,
                'comment' => 'ID of the associated district',
            ])
            ->addColumn('name', 'string', [
                'limit' => 100,
                'null' => false,
                'comment' => 'Name of the upazila',
            ])
            ->addColumn('status', 'integer', [
                'null' => false,
                'default' => 1,
                'comment' => 'Status of the upazila',
            ])
            ->addColumn('created_by', 'string', [
                'limit' => 50,
                'null' => true,
                'default' => null,
                'comment' => 'User who created the record',
            ])
            ->addColumn('modified_by', 'string', [
                'limit' => 50,
                'null' => true,
                'default' => null,
                'comment' => 'User who last modified the record',
            ])
            ->addColumn('created', 'datetime', [
                'null' => true,
                'default' => null,
                'comment' => 'Timestamp when the record was created',
            ])
            ->addColumn('modified', 'timestamp', [
                'null' => false,
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP',
                'comment' => 'Timestamp when the record was last modified',
            ])
            ->addPrimaryKey('id')
            ->addForeignKey('division_id', 'divisions', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION',
                'constraint' => 'fk_upazilas_divisions'
            ])
            ->addForeignKey('district_id', 'districts', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION',
                'constraint' => 'fk_upazilas_districts'
            ])
            ->create();
    }
}
