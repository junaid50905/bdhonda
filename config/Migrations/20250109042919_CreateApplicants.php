<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateApplicants extends BaseMigration
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
        $table = $this->table('applicants');
        $table->addColumn('job_id', 'integer', ['null' => false])
            ->addColumn('first_name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('last_name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('phone', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('email', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('address', 'text', ['null' => true])
            ->addColumn('cv', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('file_dir', 'string', ['limit' => 255, 'null' => true])
            ->addColumn('status', 'integer', ['default' => 1, 'null' => false])
            ->addColumn('created_ip', 'string', ['limit' => 50, 'null' => true])
            ->addColumn('created', 'datetime', ['null' => true])
            ->create();
    }
}
