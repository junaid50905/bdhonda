<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * StaticPages Controller
 *
 */
class StaticPagesController extends AppController
{
    public function satkhira()
    {
        $this->set('page_title', 'static');
        $this->set('meta_description', 'Honda is the world’s largest manufacturer of two Wheelers, Recognized the world over as the symbol of Honda two wheelers, the ‘Wings’ arrived in Bangladesh.');
        $this->set('meta_keywords', 'Honda, Bike, Two wheelers, Scooter, Stylish Bike');
    }
}
