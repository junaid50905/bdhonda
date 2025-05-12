<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreatePressReleases extends BaseMigration
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
        $table = $this->table('press_releases');
        $table->addColumn('title', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('pr_text', 'text', ['null' => true, 'default' => null])
            ->addColumn('pr_file', 'string', ['limit' => 255, 'null' => true, 'default' => null])
            ->addColumn('file_dir', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('publish_date', 'date', ['null' => false])
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
