<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Newsletter extends Component
{
    public $month;
    public $image;
    public $preview;
    /**
     * Create a new component instance.
     */
    public function __construct($month, $image, $preview)
    {
        $this->month = $month;
        $this->image = $image;
        $this->preview = $preview;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.newsletter');
    }
}
