<?php

declare(strict_types=1);

namespace App\Controller;

class PartPricesController extends AppController
{
    /**
     * --------- Admin section ---------------
     */
    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Part Prices');

        $partPrices = $this->PartPrices->find()
            ->select(['id', 'name', 'part_number', 'price'])
            ->limit(10)
            ->all();

        $this->set('partPrices', $partPrices); // Use 'partPrices' here
    }
}
