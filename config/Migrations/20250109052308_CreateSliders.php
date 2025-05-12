<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateSliders extends BaseMigration
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
        $table = $this->table('sliders');
        $table->addColumn('title', 'string', [
            'limit' => 255,
            'null' => true,
            'default' => null,
            'comment' => 'Title of the slider'
        ])
            ->addColumn('image', 'string', [
                'limit' => 255,
                'null' => true,
                'default' => null,
                'comment' => 'Image URL or path'
            ])
            ->addColumn('url', 'string', [
                'limit' => 255,
                'null' => true,
                'default' => null,
                'comment' => 'Link associated with the slider'
            ])
            ->addColumn('position', 'integer', [
                'null' => false,
                'default' => 0,
                'comment' => 'Position/order of the slider'
            ])
            ->addColumn('status', 'integer', [
                'null' => false,
                'default' => 1,
                'comment' => 'Slider status: active (1) or inactive (0)'
            ])
            ->addColumn('created_by', 'string', [
                'limit' => 50,
                'null' => true,
                'default' => null,
                'comment' => 'User who created the record'
            ])
            ->addColumn('modified_by', 'string', [
                'limit' => 50,
                'null' => true,
                'default' => null,
                'comment' => 'User who last modified the record'
            ])
            ->addColumn('created', 'datetime', [
                'null' => true,
                'default' => null,
                'comment' => 'Record creation timestamp'
            ])
            ->addColumn('modified', 'timestamp', [
                'null' => false,
                'default' => 'CURRENT_TIMESTAMP',
                'update' => 'CURRENT_TIMESTAMP',
                'comment' => 'Record modification timestamp'
            ])
            ->create();
    }
}
