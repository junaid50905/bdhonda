<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateDealerApplications extends BaseMigration
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
        $table = $this->table('dealer_applications');
        $table->addColumn('name', 'string', ['limit' => 255, 'null' => false])
            ->addColumn('email', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('mobile', 'string', ['limit' => 20, 'null' => true, 'default' => null])
            ->addColumn('district_id', 'integer', ['null' => false])
            ->addColumn('upazila_id', 'integer', ['null' => false])
            ->addColumn('status', 'integer', ['null' => false, 'default' => 1])
            ->addColumn('created_ip', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('created', 'timestamp', ['null' => false, 'default' => 'CURRENT_TIMESTAMP'])
            ->create();
    }
}
