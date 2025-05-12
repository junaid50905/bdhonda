<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Services Controller
 *
 */
class ServicesController extends AppController
{
    /**
     * hondaService
     */
    public function hondaService()
    {
        $this->set('page_title', 'Honda Service');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');
    }
    /**
     * maintenance
     */
    public function maintenance()
    {
        $this->set('page_title', 'Maintenance');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');
    }
    /**
     * warranty
     */
    public function warranty()
    {
        $this->set('page_title', 'Honda Service');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');
    }
    /**
     * genuineParts
     */
    public function genuineParts()
    {
        // Set the page title, meta description, and keywords
        $this->set('page_title', 'Honda Service');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        // Fetch the list of products (key-value pair)
        $products = $this->fetchTable('Products')->find('list')->toArray();
        $this->set('products', $products);

        // Handle form submission (POST request)
        if ($this->request->is('post')) {
            // Get form data
            $data = $this->request->getData('Service');

            // Initialize conditions array
            $conditions = [];

            // Build conditions based on form input
            if (!empty($data['product_id'])) {
                $conditions['PartPrices.product_id'] = (int)$data['product_id'];
            }
            if (!empty($data['part_number'])) {
                $conditions['PartPrices.part_number'] = $data['part_number'];
            }
            if (!empty($data['name'])) {
                $conditions['PartPrices.name LIKE'] = '%' . $data['name'] . '%';
            }

            // If any conditions were added, fetch the filtered part prices
            if (!empty($conditions)) {
                $partPrices = $this->fetchTable('PartPrices')->find('all', [
                    'conditions' => $conditions,
                    'fields' => [
                        'PartPrices.id',
                        'PartPrices.name',
                        'PartPrices.part_number',
                        'PartPrices.price',
                        'Products.id',
                        'Products.name'
                    ],
                    'contain' => ['Products'] // Ensures Product data is fetched with PartPrices
                ])->all();

                // Set part prices to view
                $this->set('partPrices', $partPrices);
            }
        }
    }
    /**
     * engineOil
     */
    public function engineOil()
    {
        $this->set('page_title', 'Honda Service');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');
    }
    /**
     * accessory
     */
    public function accessory()
    {
        $this->set('page_title', 'Honda Service');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');
    }
    /**
     * ownersManual
     */
    public function ownersManual()
    {
        $this->set('page_title', 'Honda Service');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');
    }
}
