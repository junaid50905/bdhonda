<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateSafeties extends BaseMigration
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
        $table = $this->table('safeties');
        $table->addColumn('product_id', 'integer', ['null' => false, 'comment' => 'Reference to Products'])
        ->addColumn('feature_name', 'string', ['limit' => 150, 'null' => false, 'comment' => 'Name of the Safety Feature'])
        ->addColumn('description', 'text', ['null' => true, 'default' => null, 'comment' => 'Description of the Safety Feature'])
        ->addColumn('image', 'string', ['limit' => 255, 'null' => true, 'default' => null, 'comment' => 'Image URL or Path'])
        ->addColumn('status', 'integer', ['null' => false, 'default' => 1, 'comment' => 'Status of the Safety Feature (e.g., Active, Inactive)'])
        ->addColumn('created_by', 'string', ['limit' => 50, 'null' => true, 'default' => null, 'comment' => 'User who created the record'])
        ->addColumn('modified_by', 'string', ['limit' => 50, 'null' => true, 'default' => null, 'comment' => 'User who last modified the record'])
        ->addColumn('created', 'datetime', ['null' => true, 'default' => null, 'comment' => 'Record creation timestamp'])
        ->addColumn('modified', 'timestamp', [
            'null' => false,
            'default' => 'CURRENT_TIMESTAMP',
            'update' => 'CURRENT_TIMESTAMP',
            'comment' => 'Record modification timestamp',
        ])
            ->addForeignKey('product_id', 'products', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION'
            ])
            ->create();
    }
}
