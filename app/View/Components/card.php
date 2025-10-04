<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $list;
    public $image;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $list, $image)
    {
        $this->title = $title;
        $this->list = $list;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
