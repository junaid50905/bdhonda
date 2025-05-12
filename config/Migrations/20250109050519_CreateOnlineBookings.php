<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateOnlineBookings extends BaseMigration
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
        $table = $this->table('online_bookings');
        $table->addColumn('first_name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('last_name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('email', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('mobile', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('product_id', 'integer', ['null' => false])
            ->addColumn('color', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('dealer_id', 'integer', ['null' => false])
            ->addColumn('date_time', 'datetime', ['null' => false])
            ->addColumn('message', 'text', ['null' => true, 'default' => null])
            ->addColumn('status', 'integer', ['null' => false, 'default' => 1])
            ->addColumn('created_ip', 'string', ['limit' => 50, 'null' => true, 'default' => null])
            ->addColumn('created', 'timestamp', [
                'null' => false,
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP',
            ])
            ->create();
    }
}
