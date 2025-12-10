<?php

namespace App\View\Components\Movie;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $index;
    public $title;
    public $releasedate;
    public $image;

    /**
     * Create a new component instance.
     */
    public function __construct($index = null, $title = null, $releasedate = null, $image = null)
    {
        $this->index = $index;
        $this->title = $title;
        $this->releasedate = $releasedate;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movie.card');
    }
}