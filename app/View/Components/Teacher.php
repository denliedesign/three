<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use function Carbon\this;

class Teacher extends Component
{
    public $image;
    public $tag;
    public $name;
    public $bio;
    /**
     * Create a new component instance.
     */
    public function __construct($image, $tag, $name, $bio)
    {
        $this->image = $image;
        $this->tag = $tag;
        $this->name = $name;
        $this->bio = $bio;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.teacher');
    }
}
