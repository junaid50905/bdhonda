<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateJobs extends BaseMigration
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
        $table = $this->table('jobs');
        $table->addColumn('name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('nature', 'string', ['limit' => 150, 'null' => false])
            ->addColumn('publish_date', 'date', ['null' => false])
            ->addColumn('deadline', 'date', ['null' => false])
            ->addColumn('salary', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('vacancy', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('description', 'text', ['null' => false])
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
