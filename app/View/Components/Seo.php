<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Seo extends Component
{
    public $image1;
    public $image2;
    public $image3;
    public $heading1;
    public $heading2;
    public $heading3;
    public $content1;
    public $content2;
    public $content3;
    /**
     * Create a new component instance.
     */
    public function __construct($image1, $image2, $image3, $heading3, $heading2, $heading1, $content3, $content2, $content1)
    {
        $this->image1 = $image1;
        $this->image2 = $image2;
        $this->image3 = $image3;
        $this->heading1 = $heading1;
        $this->heading2 = $heading2;
        $this->heading3 = $heading3;
        $this->content1 = $content1;
        $this->content2 = $content2;
        $this->content3 = $content3;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.seo');
    }
}
