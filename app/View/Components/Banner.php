<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
{
    public $banner;
    public $alt;
    public $heading;
    public $position;
    /**
     * Create a new component instance.
     */
    public function __construct($banner, $alt, $position, $heading)
    {
        $this->banner = $banner;
        $this->alt = $alt;
        $this->position = $position;
        $this->heading = $heading;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.banner');
    }
}
