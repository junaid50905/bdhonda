<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateProducts extends BaseMigration
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
        $table = $this->table('products');
        $table->addColumn('name', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('slug', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('product_menu_order', 'integer', ['null' => false, 'default' => 0])
            ->addColumn('product_thumb', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('home_bg', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('small_logo', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('inner_bg', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('about_image', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('about_text', 'text', ['null' => true, 'default' => null])
            ->addColumn('specifications_image', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('price_image', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('brochure', 'string', ['limit' => 100, 'null' => true, 'default' => null])
            ->addColumn('angle_view', 'integer', ['null' => false, 'default' => 0])
            ->addColumn('status', 'integer', ['null' => false, 'default' => 1])
            ->addColumn('test_ride', 'integer', ['null' => false, 'default' => 0])
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
