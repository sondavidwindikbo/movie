<?php

namespace App\View\Components\Movie;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Card extends Component
{
    public $index;
    public $title;
    public $releasedate; // Sudah benar
    public $image;

    public function __construct($index, $title, $releasedate, $image)
    {
        $this->index = $index;
        $this->title = Str::upper($title);
        // $this->title = $title;
        $this->releasedate = Carbon::parse($releasedate)->format('M d, Y'); // Sudah benar
        $this->image = $image;
    }

    public function render(): View|Closure|string
    {
       
        return view('components.movie.card');
    }
}