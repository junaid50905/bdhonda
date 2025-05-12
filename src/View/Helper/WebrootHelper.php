<?php

namespace App\View\Helper;

use Cake\View\Helper;

class WebrootHelper extends Helper
{
    // Example method to generate asset URLs
    public function url($path)
    {
        return $this->Url->build('/' . ltrim($path, '/'));
    }
}
