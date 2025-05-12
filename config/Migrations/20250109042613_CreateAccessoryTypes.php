<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateAccessoryTypes extends BaseMigration
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
        $table = $this->table('accessory_types');
        $table->addColumn('name', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('status', 'integer', ['default' => 1, 'null' => false])
            ->addColumn('created_by', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('modified_by', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('created', 'datetime', ['null' => true])
            ->addColumn('modified', 'timestamp', ['default' => 'CURRENT_TIMESTAMP', 'null' => false])
            ->create();

    }
}
