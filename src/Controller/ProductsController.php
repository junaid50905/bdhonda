<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\NotFoundException;
use Cake\Routing\Router;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController
{
    public function index($slug = null)
    {
        // Set the page title, meta description, and keywords
        $this->set('page_title', 'Bangladesh Honda Private Limited');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        // Get the product slug from the URL
        $slug = h(strip_tags($slug));

        // Set the slug to the view
        $this->set('slug', $slug);

        // Find product details using the slug
        $productDetails = $this->Products->findBySlug($slug)->first();

        // If product details exist, set them to the view
        if ($productDetails) {
            $this->set('productDetails', $productDetails);
        } else {
            // Throw a 404 error if the product is not found
            throw new NotFoundException(__('Product not found'));
        }
    }
    /**
     * view360
     */
    public function view360($slug)
    {
        dd('view360');
    }
    /**
     * about
     */
    public function about()
    {
        $this->set('page_title', 'Bangladesh Honda Private Limited');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        // Get current request URL
        $uriSegments = explode('/', $this->request->getRequestTarget());
        $slug = h(strip_tags($uriSegments[count($uriSegments) - 2]));
        $this->set(compact('slug'));

        // Fetch product details based on slug
        $productDetails = $this->Products->getProductBySlug($slug);

        if ($productDetails) {
            $this->set(compact('productDetails'));
        } else {
            return $this->redirect(['controller' => 'Errors', 'action' => 'error404']);
        }
    }

    /**
     * features
     */
    public function features()
    {
        $this->set('page_title', 'Bangladesh Honda Private Limited');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        // Get current request URL
        $uriSegments = explode('/', $this->request->getUri()->getPath());
        $slug = h(strip_tags($uriSegments[count($uriSegments) - 2]));
        $this->set(compact('slug'));

        // Fetch product details based on slug
        $productTable = $this->getTableLocator()->get('Products');
        // Query the product by slug
        $productDetails = $productTable->find()
            ->where(['slug' => $slug])
            ->contain(['Features'])
            ->first();

        if ($productDetails) {
            $this->set(compact('productDetails'));
        } else {
            throw new NotFoundException(__('Product not found.'));
        }
    }


    /**
     * accessories
     */
    // public function accessories($slug)
    // {
    //     // Set page title and meta details
    //     $this->set('page_title', 'Bangladesh Honda Private Limited');
    //     $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
    //     $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

    //     // Get the URI segments to extract the slug
    //     $uriSegments = explode('/', $this->request->getUri()->getPath());
    //     $slug = h(strip_tags($uriSegments[count($uriSegments) - 2]));
    //     $this->set(compact('slug'));

    //     $productTable = $this->getTableLocator()->get('Products');
    //     $productDetails = $productTable->find()
    //     ->where(['Products.slug' => $slug])
    //     ->first();

    //      echo '<pre>'; print_r($productTable); echo '</pre>';


    //     if ($productDetails) {
    //         // Set the product details and associated data to the view
    //         $this->set(compact('productDetails'));
    //     } else {
    //         throw new NotFoundException(__('Product not found.'));
    //     }

    // }
    // public function accessories($slug)
    // {
    //     // Set page title and meta information
    //     $this->set('page_title', 'Bangladesh Honda Private Limited');
    //     $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
    //     $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

    //     // Fetch the product based on the slug
    //     $productTable = $this->getTableLocator()->get('Products');
    //     $productDetails = $productTable->find()
    //     ->where(['Products.slug' => $slug])
    //     ->contain(['Accessories'])
    //     ->first();

    //     echo '<pre>';
    //     print_r($productDetails);
    //     echo '</pre>';


    //     if ($productDetails) {
    //         $this->set(compact('productDetails'));
    //     } else {
    //         throw new NotFoundException(__('Product not found.'));
    //     }

    // }
    // public function accessories($slug)
    // {
    //     // Set page title and meta information
    //     $this->set('page_title', 'Bangladesh Honda Private Limited');
    //     $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
    //     $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

    //     // Fetch the product based on the slug
    //     $productTable = $this->getTableLocator()->get('Products');
    //     $productDetails = $productTable->find()
    //         ->where(['Products.slug' => $slug])
    //         ->first();

    //     if ($productDetails) {
    //         // Fetch the accessories related to the product
    //         $accessoriesTable = $this->getTableLocator()->get('Accessories');
    //         $accessories = $accessoriesTable->find()
    //             ->where(['Accessories.product_id' => $productDetails->id])
    //             ->all();
    //         $this->set(compact('productDetails', 'accessories'));
    //     } else {
    //         throw new NotFoundException(__('Product not found.'));
    //     }
    // }
    public function accessories($slug)
    {
        // Set page title and meta information
        $this->set('page_title', 'Bangladesh Honda Private Limited');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        // Fetch the product based on the slug
        $productTable = $this->getTableLocator()->get('Products');
        $productDetails = $productTable->find()
            ->where(['Products.slug' => $slug])
            ->first();


        if ($productDetails) {
            // Fetch the accessories related to the product
            $accessoriesTable = $this->getTableLocator()->get('Accessories');

            $accessories = $accessoriesTable->find()
                ->where(['Accessories.product_id' => $productDetails->id])
                ->all();

            $accessoriesList = $accessories->toArray();


            $this->set(compact('productDetails'));
            $this->set(compact('accessoriesList'));
            // echo '<pre>';
            // print_r($accessoriesList);
            // echo '</pre>';


        } else {
            throw new NotFoundException(__('Product not found.'));
        }
    }
    /**
     * specifications
     */
    public function specifications($slug)
    {
        $this->set('page_title', 'Bangladesh Honda Private Limited');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        // Get the URI segments to extract the slug
        $uriSegments = explode('/', $this->request->getUri()->getPath());
        $slug = h(strip_tags($uriSegments[count($uriSegments) - 2]));
        $this->set(compact('slug'));

        $productTable = $this->getTableLocator()->get('Products');
        $productDetails = $productTable->find()
            ->contain(['BodyDimensions', 'Engines', 'Transmissions', 'TyresBrakes', 'FramesSuspensions', 'Electricals'])
            ->where(['Products.slug' => $slug])
            ->first();

        if ($productDetails) {
            // Set the product details and associated data to the view
            $this->set(compact('productDetails'));
        } else {
            throw new NotFoundException(__('Product not found.'));
        }
    }
    /**
     * colors
     */
    public function colors($slug)
    {
        $this->set('page_title', 'Bangladesh Honda Private Limited');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        // Fetch product details based on slug
        $productTable = $this->getTableLocator()->get('Products');

        // Query the product by slug and contain the Colors association
        $productDetails = $productTable->find()
            ->where(['slug' => $slug])
            ->contain(['Colors']) // Ensure Colors association is loaded
            ->first();

        if (!$productDetails) {
            throw new NotFoundException(__('Product not found.'));
        }

        // Set the product details and slug for the view
        $this->set(compact('productDetails', 'slug'));
    }
    /**
     * price
     */
    public function price($slug)
    {
        $this->set('page_title', 'Bangladesh Honda Private Limited');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        $uriSegments = explode('/', Router::url(null, true));
        $slug = h(strip_tags($uriSegments[count($uriSegments) - 2]));
        $this->set('slug', $slug);

        // Fetch product along with its associated prices
        $productDetails = $this->Products->find('all', [
            'contain' => ['Prices'],
            'conditions' => ['Products.slug' => $slug]
        ])->first();

        if ($productDetails) {
            $this->set('productDetails', $productDetails);
        } else {
            throw new NotFoundException(__('Product not found'));
        }
    }
    /**
     * onlineBookings
     */
    public function onlineBookings($slug)
    {
        $this->set('page_title', 'Bangladesh Honda Private Limited');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        dd('fsda');
    }

    /**
     * ------------ Admin Section --------------
     *
     */

    public function allList()
    {
        $this->viewBuilder()->setLayout('admin_layout');

        $this->set('page_title', 'Products');

        $products = $this->Products->find()
            ->select(['id', 'slug', 'name', 'small_logo'])
            ->all();

        $this->set('products', $products);
    }
}
