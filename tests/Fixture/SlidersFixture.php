<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SlidersFixture
 */
class SlidersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'image' => 'Lorem ipsum dolor sit amet',
                'url' => 'Lorem ipsum dolor sit amet',
                'position' => 1,
                'status' => 1,
                'created_by' => 'Lorem ipsum dolor sit amet',
                'modified_by' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-03-19 08:34:01',
                'modified' => 1742373241,
            ],
        ];
        parent::init();
    }
}
