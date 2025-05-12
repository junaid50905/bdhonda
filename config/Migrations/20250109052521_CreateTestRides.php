<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateTestRides extends BaseMigration
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
        $table = $this->table('test_rides');
        $table->addColumn('first_name', 'string', [
            'limit' => 100,
            'null' => false,
            'comment' => 'First name of the customer'
        ])
            ->addColumn('last_name', 'string', [
                'limit' => 100,
                'null' => false,
                'comment' => 'Last name of the customer'
            ])
            ->addColumn('email', 'string', [
                'limit' => 100,
                'null' => false,
                'comment' => 'Email address of the customer'
            ])
            ->addColumn('mobile', 'string', [
                'limit' => 100,
                'null' => true,
                'default' => null,
                'comment' => 'Mobile number of the customer'
            ])
            ->addColumn('product_id', 'integer', [
                'null' => false,
                'comment' => 'ID of the associated product'
            ])
            ->addColumn('color', 'string', [
                'limit' => 100,
                'null' => false,
                'comment' => 'Preferred color of the product'
            ])
            ->addColumn('dealer_id', 'integer', [
                'null' => false,
                'comment' => 'ID of the associated dealer'
            ])
            ->addColumn('date_time', 'datetime', [
                'null' => false,
                'comment' => 'Scheduled date and time for the test ride'
            ])
            ->addColumn('message', 'text', [
                'null' => true,
                'default' => null,
                'comment' => 'Additional message from the customer'
            ])
            ->addColumn('status', 'integer', [
                'null' => false,
                'default' => 1,
                'comment' => 'Status of the test ride request'
            ])
            ->addColumn('created_ip', 'string', [
                'limit' => 50,
                'null' => true,
                'default' => null,
                'comment' => 'IP address from which the request was created'
            ])
            ->addColumn('created', 'timestamp', [
                'null' => false,
                'default' => 'CURRENT_TIMESTAMP',
                'comment' => 'Timestamp when the record was created'
            ])
            ->create();
    }
}
