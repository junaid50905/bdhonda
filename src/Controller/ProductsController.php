<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\NotFoundException;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;
use Cake\Utility\Text;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;


/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController
{
    protected $Products;
    protected $Features;

    public function initialize(): void
    {
        parent::initialize();
        $this->Products = TableRegistry::getTableLocator()->get('products');
        $this->Features = TableRegistry::getTableLocator()->get('features');
        $this->loadComponent('Flash');
    }


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

    public function add()
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add new products');

        $product = $this->Products->newEmptyEntity();

        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $slug = Text::slug($data['name']);
            // Slug generation
            $data['slug'] = $slug;

            // Set common fields
            $data['order'] = 1;
            $data['status'] = 1;
            $data['created_by'] = null;
            $data['modified_by'] = null;
            $data['created'] = date('Y-m-d H:i:s');
            $data['modified'] = date('Y-m-d H:i:s');

            // File upload path
            $uploadPath = WWW_ROOT . 'assets/public/images/';

            // Handle file uploads
            $fileFields = [
                'product_thumb',
                'home_bg',
                'small_logo',
                'inner_bg',
                'about_image',
                'specifications_image',
                'price_image',
                'brochure'
            ];

            foreach ($fileFields as $field) {
                if (!empty($data[$field]) && $data[$field]->getError() === UPLOAD_ERR_OK) {
                    $slug = Text::slug($data['name']);

                    // ✅ Set different folder for product_thumb
                    if ($field === 'product_thumb') {
                        $pictureUploadedPath = $uploadPath . 'thumb/';
                    } else {
                        $pictureUploadedPath = $uploadPath . $slug . '/';
                    }

                    // ✅ Create directory if not exists
                    if (!is_dir($pictureUploadedPath)) {
                        mkdir($pictureUploadedPath, 0775, true);
                    }

                    $file = $data[$field];
                    $extension = pathinfo($file->getClientFilename(), PATHINFO_EXTENSION);
                    $filename = Text::uuid() . '.' . $extension;

                    $file->moveTo($pictureUploadedPath . $filename);

                    // Store filename only
                    $data[$field] = $filename;
                } else {
                    unset($data[$field]);
                }
            }




            // Save product
            $product = $this->Products->patchEntity($product, $data);

            if ($this->Products->save($product)) {
                $this->Flash->success(__('Product has been saved successfully.'));
                return $this->redirect(['action' => 'allList']);
            } else {
                $this->Flash->error(__('Unable to save the product. Please try again.'));
            }
        }

        $this->set(compact('product'));
    }

    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Edit product');

        $product = $this->Products->get($id);

        if ($this->request->is(['post', 'put'])) {
            $data = $this->request->getData();
            $slug = Text::slug($data['name']);
            $data['slug'] = $slug;
            $data['modified'] = date('Y-m-d H:i:s');

            $uploadPath = WWW_ROOT . 'assets/public/images/';
            $fileFields = [
                'product_thumb',
                'home_bg',
                'small_logo',
                'inner_bg',
                'about_image',
                'specifications_image',
                'price_image',
                'brochure'
            ];

            foreach ($fileFields as $field) {
                if (!empty($data[$field]) && $data[$field]->getError() === UPLOAD_ERR_OK) {
                    if ($field === 'product_thumb') {
                        $pictureUploadedPath = $uploadPath . 'thumb/';
                    } else {
                        $pictureUploadedPath = $uploadPath . $slug . '/';
                    }

                    if (!is_dir($pictureUploadedPath)) {
                        mkdir($pictureUploadedPath, 0775, true);
                    }

                    $file = $data[$field];
                    $extension = pathinfo($file->getClientFilename(), PATHINFO_EXTENSION);
                    $filename = Text::uuid() . '.' . $extension;

                    $file->moveTo($pictureUploadedPath . $filename);
                    $data[$field] = $filename;
                } else {
                    unset($data[$field]);
                }
            }

            $product = $this->Products->patchEntity($product, $data);

            if ($this->Products->save($product)) {
                $this->Flash->success(__('Product has been updated successfully.'));
                return $this->redirect(['action' => 'allList']);
            } else {
                $this->Flash->error(__('Unable to update the product. Please try again.'));
            }
        }

        $this->set(compact('product'));
    }



    // public function addProductDetails(?int $id = null)
    // {

    //     $this->viewBuilder()->setLayout('admin_layout');
    //     $this->set('page_title', 'Add product details');


    //     $productTable = TableRegistry::getTableLocator()->get('Products');
    //     $colorTable = TableRegistry::getTableLocator()->get('Colors');
    //     $featureTable = TableRegistry::getTableLocator()->get('Features');
    //     $priceTable = TableRegistry::getTableLocator()->get('Prices');
    //     $bodyDimensionTable = TableRegistry::getTableLocator()->get('BodyDimensions');
    //     $engineTable = TableRegistry::getTableLocator()->get('Engines');
    //     $transmissionTable = TableRegistry::getTableLocator()->get('Transmissions');
    //     $tyresBrakeTable = TableRegistry::getTableLocator()->get('TyresBrakes');
    //     $framesSuspensionTable = TableRegistry::getTableLocator()->get('FramesSuspensions');
    //     $electricalTable = TableRegistry::getTableLocator()->get('Electricals');

    //     $product = $productTable->get($id);


    //     $this->set([
    //         'page_title' => 'Products',
    //         'product_id' => $id,
    //         'product_slug' => $product->slug,
    //         'product_details' => $product
    //     ]);

    //     $request = $this->getRequest();




    //     // dd($request);

    //     // if ($request->is('post')) {
    //     //     $data = $request->getData();
    //     //     $slug = $product->slug;

    //     //     // Handle Color
    //     //     if (!empty($data['Color'])) {
    //     //         if (!empty($data['Color']['temp_image']->getClientFilename())) {
    //     //             $newName = Text::uuid();
    //     //             $uploadPath = $slug . '/colors/zoom';
    //     //             $uploaded = $this->uploadImage($newName, $data['Color']['temp_image'], ['uploadTo' => $uploadPath]);
    //     //             if ($uploaded) {
    //     //                 $data['Color']['image'] = $uploaded;
    //     //             }
    //     //         }
    //     //         if (!empty($data['Color']['temp_image_thumb']->getClientFilename())) {
    //     //             $newName = Text::uuid();
    //     //             $uploadPath = $slug . '/colors';
    //     //             $uploaded = $this->uploadImage($newName, $data['Color']['temp_image_thumb'], ['uploadTo' => $uploadPath]);
    //     //             if ($uploaded) {
    //     //                 $data['Color']['image_thumb'] = $uploaded;
    //     //             }
    //     //         }
    //     //         $colorEntity = $colorTable->patchEntity(
    //     //             isset($data['Color']['id']) ? $colorTable->get($data['Color']['id']) : $colorTable->newEmptyEntity(),
    //     //             $data['Color']
    //     //         );
    //     //         if ($colorTable->save($colorEntity)) {
    //     //             $this->Flash->success('Color saved successfully!');
    //     //             return $this->redirect($request->referer());
    //     //         } else {
    //     //             $this->Flash->error('Color not saved!');
    //     //         }
    //     //     }

    //     //     // Repeat the same structure for other sections (Feature, Price, etc.)

    //     //     // Example: Feature
    //     //     if (!empty($data['Feature'])) {
    //     //         if (!empty($data['Feature']['temp_image']->getClientFilename())) {
    //     //             $newName = Text::uuid();
    //     //             $uploadPath = $slug . '/features';
    //     //             $uploaded = $this->uploadImage($newName, $data['Feature']['temp_image'], ['uploadTo' => $uploadPath]);
    //     //             if ($uploaded) {
    //     //                 $data['Feature']['image'] = $uploaded;
    //     //             }
    //     //         }
    //     //         $featureEntity = $featureTable->patchEntity(
    //     //             isset($data['Feature']['id']) ? $featureTable->get($data['Feature']['id']) : $featureTable->newEmptyEntity(),
    //     //             $data['Feature']
    //     //         );
    //     //         if ($featureTable->save($featureEntity)) {
    //     //             $this->Flash->success('Feature saved successfully!');
    //     //             return $this->redirect($request->referer());
    //     //         } else {
    //     //             $this->Flash->error('Feature not saved!');
    //     //         }
    //     //     }

    //     //     // Repeat this pattern for: Price, BodyDimension, Engine, Transmission, TyresBrake, FramesSuspension, Electrical

    //     //     $tables = [
    //     //         'Price' => $priceTable,
    //     //         'BodyDimension' => $bodyDimensionTable,
    //     //         'Engine' => $engineTable,
    //     //         'Transmission' => $transmissionTable,
    //     //         'TyresBrake' => $tyresBrakeTable,
    //     //         'FramesSuspension' => $framesSuspensionTable,
    //     //         'Electrical' => $electricalTable,
    //     //     ];

    //     //     foreach ($tables as $key => $table) {
    //     //         if (!empty($data[$key])) {
    //     //             $entity = $table->patchEntity(
    //     //                 isset($data[$key]['id']) ? $table->get($data[$key]['id']) : $table->newEmptyEntity(),
    //     //                 $data[$key]
    //     //             );
    //     //             if ($table->save($entity)) {
    //     //                 $this->Flash->success("{$key} saved successfully!");
    //     //                 return $this->redirect($request->referer());
    //     //             } else {
    //     //                 $this->Flash->error("{$key} not saved!");
    //     //             }
    //     //         }
    //     //     }
    //     // }

    //     // return $this->response;
    // }


    // public function addProductDetails($id = null)
    // {
    //     $this->viewBuilder()->setLayout('admin_layout');
    //     $this->set('page_title', 'Add product details');

    //     $this->request->allowMethod(['get', 'post']);

    //     $productsTable = TableRegistry::getTableLocator()->get('Products');
    //     $colorsTable = TableRegistry::getTableLocator()->get('Colors');


    //     // Load product with all associated details using contain()
    //     $product = $productsTable->find()
    //         ->contain([
    //             'Colors',
    //             'Features',
    //             'Prices',
    //             'BodyDimensions',
    //             'Engines',
    //             'Transmissions',
    //             'TyresBrakes',
    //             'FramesSuspensions',
    //             'Electricals'
    //         ])
    //         ->where(['Products.id' => $id])
    //         ->first();
    //     if (!$product) {
    //         throw new NotFoundException(__('Product not found'));
    //     }

    //     $this->set(compact('product'));

    //     if ($this->request->is('post')) {

    //         dd($this->request->getData());

    //         $colorNewData = $this->request->getData()['data']['Color'];
    //         $product = $this->request->getData()['data']['Product'];

    //         // Handle file upload for temp_image
    //         if ((!empty($colorNewData['temp_image']) && $colorNewData['temp_image']->getError() === 0) || !empty($colorNewData['temp_image_thumb']) && $colorNewData['temp_image_thumb']->getError() === 0) {
    //             $tempImage = $colorNewData['temp_image'];
    //             $tempImageThumb = $colorNewData['temp_image_thumb'];

    //             $tempImageName = uniqid() . '-' . $tempImage->getClientFilename();
    //             $tempImageThumbName = uniqid() . '-' . $tempImageThumb->getClientFilename();

    //             $tempImage->moveTo(WWW_ROOT . 'assets/public/images/'. $product->slug . '/' .'colors/zoom/' . $tempImageName);
    //             $tempImageThumb->moveTo(WWW_ROOT . 'assets/public/images/'. $product->slug . '/' .'colors/' . $tempImageThumbName);
    //         }
    //     }


    // }



    public function addProductDetails($id = null)
    {
        $this->viewBuilder()->setLayout('admin_layout');
        $this->set('page_title', 'Add product details');

        $this->request->allowMethod(['get', 'post']);

        $productsTable = TableRegistry::getTableLocator()->get('Products');
        $colorsTable = TableRegistry::getTableLocator()->get('Colors');
        $featuresTable = TableRegistry::getTableLocator()->get('Features');
        $pricesTable = TableRegistry::getTableLocator()->get('Prices');

        $product = $productsTable->find()
            ->contain([
                'Colors',
                'Features',
                'Prices',
                'BodyDimensions',
                'Engines',
                'Transmissions',
                'TyresBrakes',
                'FramesSuspensions',
                'Electricals'
            ])
            ->where(['Products.id' => $id])
            ->first();


        if (!$product) {
            throw new NotFoundException(__('Product not found'));
        }



        $this->set(compact('product'));

        if ($this->request->is('post')) {

            $formName = $this->request->getData('form_name');

            if($formName == 'update color details'){

                $data = $this->request->getData()['data'];
                $colorData = $data['Color'];
                $productSlug = $data['Product']['slug'];

                // Fetch existing color record
                $color = $colorsTable->get($colorData['id']);

                // Handle image upload if available
                if (!empty($colorData['temp_image']) && $colorData['temp_image']->getError() === 0) {
                    $image = $colorData['temp_image'];
                    $imageName = uniqid() . '-' . $image->getClientFilename();
                    $image->moveTo(WWW_ROOT . 'assets/public/images/' . $productSlug . '/colors/zoom/' . $imageName);
                    $colorData['image'] = $imageName; // Assuming 'image' is the DB column
                }

                if (!empty($colorData['temp_image_thumb']) && $colorData['temp_image_thumb']->getError() === 0) {
                    $thumb = $colorData['temp_image_thumb'];
                    $thumbName = uniqid() . '-' . $thumb->getClientFilename();
                    $thumb->moveTo(WWW_ROOT . 'assets/public/images/' . $productSlug . '/colors/' . $thumbName);
                    $colorData['image_thumb'] = $thumbName; // Assuming 'image_thumb' is the DB column
                }

                // Patch the color entity with updated data
                $color = $colorsTable->patchEntity($color, $colorData);

                if ($colorsTable->save($color)) {
                    $this->Flash->success(__('Color details updated successfully.'));
                    return $this->redirect($this->referer());
                } else {
                    $this->Flash->error(__('Unable to update color details.'));
                }
            }elseif($formName == 'add color details'){

                $data = $this->request->getData();
                $colorData = $data['Color'];
                $slug = $data['Product']['slug'];

                $colorEntity = $colorsTable->newEmptyEntity();
                $colorEntity = $colorsTable->patchEntity($colorEntity, [
                    'product_id' => $colorData['product_id'],
                    'name' => $colorData['name'],
                    'tab_name' => $colorData['tab_name'],
                    'status' => 1
                ]);

                // Handle file upload
                $uploadPath = WWW_ROOT . 'assets/public/images/' . $slug . '/colors/';
                $zoomPath = $uploadPath . 'zoom/';

                if (!file_exists($zoomPath)) {
                    mkdir($zoomPath, 0755, true);
                }

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }

                // Product image
                if (!empty($colorData['temp_image']) && $colorData['temp_image']->getError() === 0) {
                    $image = $colorData['temp_image'];
                    $imageName = uniqid() . '-' . $image->getClientFilename();
                    $image->moveTo($zoomPath . $imageName);
                    $colorEntity->image = $imageName;
                }

                // Product thumbnail
                if (!empty($colorData['temp_image_thumb']) && $colorData['temp_image_thumb']->getError() === 0) {
                    $thumb = $colorData['temp_image_thumb'];
                    $thumbName = uniqid() . '-' . $thumb->getClientFilename();
                    $thumb->moveTo($uploadPath . $thumbName);
                    $colorEntity->image_thumb = $thumbName;
                }

                if ($colorsTable->save($colorEntity)) {
                    $this->Flash->success(__('Color added successfully.'));
                    return $this->redirect(['action' => 'addProductDetails', $id]);
                } else {
                    $this->Flash->error(__('Failed to add color.'));
                }


            }elseif($formName == 'update feature'){
                $data = $this->request->getData()['data'];
                $featureData = $data['Feature'];
                $productSlug = $data['Product']['slug'];

                // Fetch existing color record
                $feature = $featuresTable->get($featureData['id']);

                // Handle image upload if available
                if (!empty($featureData['temp_image']) && $featureData['temp_image']->getError() === 0) {
                    $image = $featureData['temp_image'];
                    $imageName = uniqid() . '-' . $image->getClientFilename();
                    $image->moveTo(WWW_ROOT . 'assets/public/images/' . $productSlug . '/features/' . $imageName);
                    $featureData['image'] = $imageName; // Assuming 'image' is the DB column
                }

                // Patch the color entity with updated data
                $feature = $featuresTable->patchEntity($feature, $featureData);

                if ($featuresTable->save($feature)) {
                    $this->Flash->success(__('Featured data updated successfully.'));
                    return $this->redirect($this->referer());
                } else {
                    $this->Flash->error(__('Unable to update color details.'));
                }
            }elseif ($formName == 'add feature item') {

                $data = $this->request->getData();
                $featureData = $data['Feature'];
                $slug = $data['Product']['slug'];

                $featureEntity = $featuresTable->newEmptyEntity();
                $featureEntity = $featuresTable->patchEntity($featureEntity, [
                    'product_id' => $featureData['product_id'],
                    'name' => $featureData['name'],
                    'details' => $featureData['details'],
                    'status' => 1
                ]);

                // Handle file upload
                $uploadPath = WWW_ROOT . 'assets/public/images/' . $slug . '/features/';

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }



                // Feature image
                if (!empty($featureData['temp_image']) && $featureData['temp_image']->getError() === 0) {
                    $image = $featureData['temp_image'];
                    $imageName = uniqid() . '-' . $image->getClientFilename();
                    $image->moveTo($uploadPath . $imageName);
                    $featureEntity->image = $imageName;
                }


                if ($featuresTable->save($featureEntity)) {
                    $this->Flash->success(__('New feature added successfully.'));
                    return $this->redirect(['action' => 'addProductDetails', $id]);
                } else {
                    $this->Flash->error(__('Failed to add feature.'));
                }
            }elseif ($formName == 'update price') {

                $data = $this->request->getData()['data'];
                $priceData = $data['Price'];

                // Fetch existing color record
                $price = $pricesTable->get($priceData['id']);

                // Patch the color entity with updated data
                $price = $pricesTable->patchEntity($price, $priceData);

                if ($pricesTable->save($price)) {
                    $this->Flash->success(__('Price updated successfully.'));
                    return $this->redirect($this->referer());
                } else {
                    $this->Flash->error(__('Unable to update price.'));
                }
            }

        }
    }

    public function deleteFeature($id)
    {
        $feature = $this->Features->get($id);

        if (!$feature) {
            throw new NotFoundException(__('Invalid Feature'));
        }

        if ($this->Features->delete($feature)) {
            $this->Flash->success(__('Feature deleted successfully!'));
        } else {
            $this->Flash->error(__('Feature not deleted!'));
        }

        return $this->redirect($this->referer());
    }



}
