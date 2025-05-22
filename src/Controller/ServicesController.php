<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;


/**
 * Services Controller
 *
 */
class ServicesController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Authentication.Authentication');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        // Allow public access to this action
        $this->Authentication->addUnauthenticatedActions(['hondaService', 'maintenance', 'warranty', 'genuineParts', 'engineOil', 'accessory', 'ownersManual']);
    }


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

        $productsTable = TableRegistry::getTableLocator()->get('Products');
        $partPricesTable = TableRegistry::getTableLocator()->get('PartPrices');

        $products = $productsTable->find('list')->toArray();
        $this->set(compact('products'));

        $results = [];

        if ($this->request->is('post')) {
            $data = $this->request->getData();

            $query = $partPricesTable->find()
                ->select(['name', 'price', 'part_number'])
                ->where(['product_id' => $data['product_id']]);

            if (!empty($data['name'])) {
                $query->where(function ($exp, $q) use ($data) {
                    return $exp->like('name', '%' . trim($data['name']) . '%');
                });
            }

            if (!empty($data['part_number'])) {
                $query->where(function ($exp, $q) use ($data) {
                    return $exp->like('part_number', '%' . trim($data['part_number']) . '%');
                });
            }

            $results = $query->all()->toArray();

        }


        $this->set(compact('results'));

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
