<?php

/**
 * Routes configuration.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * It's loaded within the context of `Application::routes()` method which
 * receives a `RouteBuilder` instance `$routes` as method argument.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;


/*
 * This file is loaded in the context of the `Application` class.
 * So you can use `$this` to reference the application class instance
 * if required.
 */

return function (RouteBuilder $routes): void {
    /*
     * The default class to use for all routes
     *
     * The following route classes are supplied with CakePHP and are appropriate
     * to set as the default:
     *
     * - Route
     * - InflectedRoute
     * - DashedRoute
     *
     * If no call is made to `Router::defaultRouteClass()`, the class used is
     * `Route` (`Cake\Routing\Route\Route`)
     *
     * Note that `Route` does not do any inflections on URLs which will result in
     * inconsistently cased URLs when used with `{plugin}`, `{controller}` and
     * `{action}` markers.
     */
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        /*
         * Here, we are connecting '/' (base path) to a controller called 'Pages',
         * its action called 'display', and we pass a param to select the view file
         * to use (in this case, templates/Pages/home.php)...
         */
        // $builder->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

        $builder->connect('/', ['controller' => 'Home', 'action' => 'index']); // done=============> controller and view
        $builder->connect('/api/sliders', ['controller' => 'Home', 'action' => 'slideImages']); // done
        $builder->connect('/api/genuine-parts', ['controller' => 'Home', 'action' => 'genuineParts']); // not
        $builder->connect('/api/bike_model', ['controller' => 'Home', 'action' => 'bikeModel']); // not
        $builder->connect('/api/products-list', ['controller' => 'Home', 'action' => 'productList']); // not
        $builder->connect('/api/accessory', ['controller' => 'Home', 'action' => 'accessory']); // not
        $builder->connect('/api/media-center/press-release', ['controller' => 'Media', 'action' => 'pressrelease']); // done: need some changes in the code

        // start
        $builder->connect('/dashboard', ['controller' => 'Dashboards', 'action' => 'index']);
        // end

        // Done start
        $builder->connect('/reach-us', ['controller' => 'Feedback', 'action' => 'index']);
        $builder->connect('/reach-us/thank-you', ['controller' => 'Feedback', 'action' => 'thankYou']); // Not done yet

        $builder->connect('/media-center/press-release', ['controller' => 'Media', 'action' => 'pressRelease']);
        $builder->connect('/media-center/pr-details/{id}', ['controller' => 'Media', 'action' => 'prDetails'])->setPass(['id']);
        $builder->connect('/media-center/gallery', ['controller' => 'Media', 'action' => 'gallery']);
        $builder->connect('/satkhira', ['controller' => 'StaticPages', 'action' => 'satkhira']);
        // Done end

        // No route found in old version start
        $builder->connect('/media-center/events', ['controller' => 'Media', 'action' => 'events']);
        $builder->connect('/media-center/event-details/{id}', ['controller' => 'Media', 'action' => 'eventDetails'])->setPass(['id']);
        // No route found in old version end


        // Done start
        $builder->connect('/product/{slug}/index', ['controller' => 'Products', 'action' => 'index'])->setPass(['slug']);
        // $builder->connect('/product/:slug/view360', ['controller' => 'Products', 'action' => 'view360'])->setPass(['slug']);// not found this route
        $builder->connect('/product/{slug}/about', ['controller' => 'Products', 'action' => 'about'])->setPass(['slug']);
        $builder->connect('/product/{slug}/features', ['controller' => 'Products', 'action' => 'features'])->setPass(['slug']);
        $builder->connect('/product/{slug}/accessories', ['controller' => 'Products', 'action' => 'accessories'])->setPass(['slug']);
        $builder->connect('/product/{slug}/specifications', ['controller' => 'Products', 'action' => 'specifications'])->setPass(['slug']);
        $builder->connect('/product/{slug}/colors', ['controller' => 'Products', 'action' => 'colors'])->setPass(['slug']);
        $builder->connect('/product/{slug}/price', ['controller' => 'Products', 'action' => 'price'])->setPass(['slug']);
        // Done end
        $builder->connect('/online_bookings/index/{slug}', ['controller' => 'OnlineBookings', 'action' => 'index'])->setPass(['slug']);

        // Done start
        $builder->connect('/services/honda-service', ['controller' => 'Services', 'action' => 'hondaService']);
        $builder->connect('/services/maintenance', ['controller' => 'Services', 'action' => 'maintenance']);
        $builder->connect('/services/warranty', ['controller' => 'Services', 'action' => 'warranty']);
        $builder->connect('/services/genuine-parts', ['controller' => 'Services', 'action' => 'genuineParts']);
        $builder->connect('/services/engine-oil', ['controller' => 'Services', 'action' => 'engineOil']);
        $builder->connect('/services/accessory', ['controller' => 'Services', 'action' => 'accessory']);
        $builder->connect('/services/owners-manual', ['controller' => 'Services', 'action' => 'ownersManual']);
        // Done end

        // Done start
        $builder->connect('/about-us/about-bhl', ['controller' => 'About', 'action' => 'aboutBhl']);
        $builder->connect('/about-us/about-honda', ['controller' => 'About', 'action' => 'aboutHonda']);
        $builder->connect('/about-us/philosophy', ['controller' => 'About', 'action' => 'philosophy']);
        $builder->connect('/about-us/innovation', ['controller' => 'About', 'action' => 'innovation']);
        $builder->connect('/about-us/motorsports', ['controller' => 'About', 'action' => 'motorsports']);
        $builder->connect('/about-us/honda-history', ['controller' => 'About', 'action' => 'hondaHistory']);
        $builder->connect('/about-us/heritage', ['controller' => 'About', 'action' => 'heritage']);
        $builder->connect('/yes-award', ['controller' => 'About', 'action' => 'yesAward']);
        // Done end

        $builder->connect('/download/:fileName', ['controller' => 'About', 'action' => 'download']);// not working // with this route there is something more

        $builder->connect('/career', ['controller' => 'Jobs', 'action' => 'index']);// controller is not ready to work
        $builder->connect('/career/job-details/:id', ['controller' => 'Jobs', 'action' => 'jobDetails']);// controller is not ready to work
        $builder->connect('/career/apply-online/:id', ['controller' => 'Jobs', 'action' => 'applyOnline']);// controller is not ready to work

        // Done start
        $builder->connect('/dealer-network/dealer-locator', ['controller' => 'Dealers', 'action' => 'dealerLocator']);
        $builder->connect('/dealer-network/apply-for-dealership', ['controller' => 'Dealers', 'action' => 'applyForDealership']);// controller is not ready to work
        $builder->connect('/dealer-network/parts-service-locator', ['controller' => 'Dealers', 'action' => 'partsServiceLocator']);// controller is not ready to work
        $builder->connect('/dealer-network/thank-you', ['controller' => 'Dealers', 'action' => 'thanks']);// controller is not ready to work
        // Done end

        // Done start
        $builder->connect('/Safety-Bangladesh', ['controller' => 'Safeties', 'action' => 'safetyApproach']);
        $builder->connect('/safety-bd/safety-initiatives', ['controller' => 'Safeties', 'action' => 'safetyInitiatives']);
        $builder->connect('/safety-bd/safety-education', ['controller' => 'Safeties', 'action' => 'safetyEducation']);
        // Done end



        /////////////////////////////// Admin routes ////////////////////////////////////////
        $builder->connect('/users/login', ['controller' => 'Users', 'action' => 'login']);
        $builder->connect('/dashboard', ['controller' => 'Dashboards', 'action' => 'index']);
        // sliders
        $builder->connect('/sliders/all_list', ['controller' => 'Sliders', 'action' => 'allList']);
        $builder->connect('/sliders/add', ['controller' => 'Sliders', 'action' => 'add']);
        $builder->connect('/sliders/edit/{id}', ['controller' => 'Sliders', 'action' => 'edit'])->setPass(['id']);

        // media
        $builder->connect('/media/all_list', ['controller' => 'Media', 'action' => 'allList']);
        $builder->connect('/media/press_release_add', ['controller' => 'Media', 'action' => 'pressReleaseAdd']);
        $builder->connect('/media/press_release_edit/{id}', ['controller' => 'Media', 'action' => 'pressReleaseEdit'])->setPass(['id']);

        // safeties
        $builder->connect('/safeties/all_list', ['controller' => 'Safeties', 'action' => 'allList']);
        $builder->connect('/safeties/add/activity_picture', ['controller' => 'Safeties', 'action' => 'activityPicture']);
        $builder->connect('/safeties/delete/activity_picture/{id}', ['controller' => 'Safeties', 'action' => 'delete'])->setPass(['id']);
        $builder->connect('/safeties/edit/activity_picture/{id}', ['controller' => 'Safeties', 'action' => 'editActivityPicture'])->setPass(['id']);

        $builder->connect('/safeties/add/pdsa', ['controller' => 'Safeties', 'action' => 'pdsa']);
        $builder->connect('/safeties/edit/pdsa/{id}', ['controller' => 'Safeties', 'action' => 'editPdsa'])->setPass(['id']);
        $builder->connect('/safeties/add/education', ['controller' => 'Safeties', 'action' => 'education']);
        $builder->connect('/safeties/edit/education/{id}', ['controller' => 'Safeties', 'action' => 'editEducation'])->setPass(['id']);

        // jobs
        $builder->connect('/jobs/all_list', ['controller' => 'Jobs', 'action' => 'allList']);
        $builder->connect('/jobs/add', ['controller' => 'Jobs', 'action' => 'add']);
        $builder->connect('/jobs/applicant_list', ['controller' => 'Jobs', 'action' => 'applicantList']);


        // dealers
        $builder->connect('/dealers/all_list', ['controller' => 'Jobs', 'action' => 'allList']);
        $builder->connect('/dealers/add', ['controller' => 'Dealers', 'action' => 'add']);
        $builder->connect('/dealers/add_district', ['controller' => 'Dealers', 'action' => 'addDistrict']);
        $builder->connect('/dealers/add_upazila', ['controller' => 'Dealers', 'action' => 'addUpazila']);
        $builder->connect('/dealers/add_dealer', ['controller' => 'Dealers', 'action' => 'addDealer']);
        $builder->connect('/dealers/ajaxDistrictsByDivision/{divisionId}', ['controller' => 'Dealers', 'action' => 'ajaxDistrictsByDivision'])
            ->setPass(['divisionId'])
            ->setMethods(['GET']);

        // dependancy dropdown
        $builder->connect('/get-districts', ['controller' => 'Dealers', 'action' => 'getDistricts']);
        $builder->connect('/get-upazilas', ['controller' => 'Dealers', 'action' => 'getUpazilas']);



        // products
        $builder->connect('/products/all_list', ['controller' => 'Products', 'action' => 'allList']);
        $builder->connect('/products/add', ['controller' => 'Products', 'action' => 'add']);
        $builder->connect('/products/edit/{id}', ['controller' => 'Products', 'action' => 'edit'])->setPass(['id']);
        $builder->connect('/products/add_product_details/{id}', ['controller' => 'Products', 'action' => 'addProductDetails'])->setPass(['id']);
        $builder->connect('/products/delete_feature/{id}', ['controller' => 'Products', 'action' => 'deleteFeature'])->setPass(['id']);

        // part prices
        $builder->connect('/part-prices/all_list', ['controller' => 'PartPrices', 'action' => 'allList']);
        $builder->connect('/part-prices/add', ['controller' => 'PartPrices', 'action' => 'add']);
        $builder->connect('/part-prices/edit/{id}', ['controller' => 'PartPrices', 'action' => 'edit'])->setPass(['id']);

        // queries
        $builder->connect('/queries/all_list', ['controller' => 'PartPrices', 'action' => 'allList']);

        // test rides
        $builder->connect('/test_rides/all_list', ['controller' => 'TestRides', 'action' => 'allList']);

        // online booking
        $builder->connect('/online_bookings/all_list', ['controller' => 'OnlineBookings', 'action' => 'allList']);

        // dealers all application
        $builder->connect('/dealers/all_application_list', ['controller' => 'Dealers', 'action' => 'allApplicationList']);

        // accessories
        $builder->connect('/accessories/all_list', ['controller' => 'Accessories', 'action' => 'allList']);
        $builder->connect('/accessories/add', ['controller' => 'Accessories', 'action' => 'add']);
        $builder->connect('/accessories/edit/{id}', ['controller' => 'Accessories', 'action' => 'edit'])->setPass(['id']);
        $builder->connect('/accessories/delete/{id}', ['controller' => 'Accessories', 'action' => 'delete'])->setPass(['id']);

        // accessory_types
        $builder->connect('/accessory_types/all_list', ['controller' => 'AccessoryTypes', 'action' => 'allList']);
        $builder->connect('/accessory_types/add', ['controller' => 'AccessoryTypes', 'action' => 'add']);
        $builder->connect('/accessory_types/edit/{id}', ['controller' => 'AccessoryTypes', 'action' => 'edit'])->setPass(['id']);






        /*
         * ...and connect the rest of 'Pages' controller's URLs.
         */
        $builder->connect('/pages/*', 'Pages::display');

        /*
         * Connect catchall routes for all controllers.
         *
         * The `fallbacks` method is a shortcut for
         *
         * ```
         * $builder->connect('/{controller}', ['action' => 'index']);
         * $builder->connect('/{controller}/{action}/*', []);
         * ```
         *
         * It is NOT recommended to use fallback routes after your initial prototyping phase!
         * See https://book.cakephp.org/5/en/development/routing.html#fallbacks-method for more information
         */
        $builder->fallbacks();
    });

    /*
     * If you need a different set of middleware or none at all,
     * open new scope and define routes there.
     *
     * ```
     * $routes->scope('/api', function (RouteBuilder $builder): void {
     *     // No $builder->applyMiddleware() here.
     *
     *     // Parse specified extensions from URLs
     *     // $builder->setExtensions(['json', 'xml']);
     *
     *     // Connect API actions here.
     * });
     * ```
     */
};
