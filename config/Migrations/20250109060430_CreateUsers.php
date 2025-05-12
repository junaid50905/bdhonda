<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateUsers extends BaseMigration
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
        $table = $this->table('users');

        $table->addColumn('username', 'string', [
            'limit' => 50,
            'null' => true,
            'default' => null,
            'comment' => 'Username for the user',
        ])
            ->addColumn('password', 'string', [
                'limit' => 255,
                'null' => true,
                'default' => null,
                'comment' => 'Password for the user',
            ])
            ->addColumn('user_type_id', 'integer', [
                'null' => false,
                'default' => 2,
                'comment' => 'Foreign key for user type',
            ])
            ->addColumn('created', 'datetime', [
                'null' => true,
                'default' => null,
                'comment' => 'Timestamp when the user was created',
            ])
            ->addColumn('modified', 'datetime', [
                'null' => true,
                'default' => null,
                'comment' => 'Timestamp when the user was last modified',
            ])
            ->addForeignKey('user_type_id', 'user_types', 'id', [
                'delete' => 'CASCADE',
                'update' => 'NO_ACTION',
                'constraint' => 'fk_users_user_types'
            ])
            ->create();
    }
}
