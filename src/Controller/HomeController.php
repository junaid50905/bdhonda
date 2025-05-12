<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Response;
use Cake\Http\Exception\NotFoundException;
use Cake\Routing\Router;

/**
 * Home Controller
 *
 */
class HomeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */


    public function index()
    {
        $this->set('page_title', 'Bangladesh Honda Private Limited');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');

        $sliders = $this->fetchTable('Sliders')->find()->all();

        $latest_event = $this->fetchTable('Events')
            ->find()
            ->select(['id', 'title', 'image', 'thumb_image', 'image_dir'])
            ->orderBy(['id' => 'DESC'])
            ->first();

        $press_releases = $this->fetchTable('PressReleases')
            ->find()
            ->select(['id', 'title', 'publish_date'])
            ->orderBy(['publish_date' => 'DESC'])
            ->all();

        $sliders = $this->fetchTable('Sliders')
            ->find()
            ->select(['image', 'url'])
            ->where(['status' => 1])
            ->orderBy(['position' => 'ASC'])
            ->all();        

        $this->set(compact('sliders', 'latest_event', 'press_releases'));
    }

    /**
     * slideImages
     */

    public function slideImages()
    {
        $sliders = $this->fetchTable('Sliders')
        ->find()
            ->select(['image', 'url'])
            ->where(['status' => 1])
            ->orderBy(['position' => 'ASC']);

        // Format the response
        $slider_images = [];
        foreach ($sliders as $k => $slider) {
            $slider_images[$k]['url'] = Router::url('/', true) . 'assets/public/images/home-banner/' . $slider->image;
            $slider_images[$k]['link'] = $slider->url;
        }

        // Return JSON response
        return new Response([
            'type' => 'application/json',
            'body' => json_encode([
                'success' => 0,
                'images' => $slider_images,
                'message' => 'The request has succeeded.'
            ])
        ]);
    }


    /**
     * genuineParts
     */
    public function genuineParts()
    {
        return new Response([
            'type' => 'application/json',
            'body' => json_encode([
                'success' => 0,
                'message' => 'The request has succeeded.'
            ])
        ]);
    }

    /**
     * bikeModel
     */
    public function bikeModel()
    {
        return $this->response
        ->withType('application/json')
        ->withStringBody(json_encode([
            'success' => 1,
            'message' => 'The request has succeeded.'
        ]));
    }

    /**
     * productList
     */
    public function productList()
    {
        return new Response([
            'type' => 'application/json',
            'body' => json_encode([
                'success' => 0,
                'message' => 'The request has succeeded.'
            ])
        ]);
    }
    /**
     * accessory
     */
    public function accessory()
    {
        return new Response([
            'type' => 'application/json',
            'body' => json_encode([
                'success' => 0,
                'message' => 'The request has succeeded.'
            ])
        ]);
    }

}
