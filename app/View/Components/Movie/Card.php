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
        $this->title = $title;
        $this->releasedate = $releasedate;
        $this->image = $image;

        if ($this->isValid()) {
            $this->title = Str::upper($title);
            $this->releasedate = Carbon::parse($releasedate)->format('M d, Y');
        }
    }

    private function isValid(): bool
    {
        return $this->title && $this->releasedate;
    }

    public function getImage(): string
    {
        if ($this->image) {
            return $this->image;
        }
        return 'https://placehold.co/300x450/000000/FFF';
    }

    public function render(): View|Closure|string
    {
        if(!$this->isValid()){
            return '';
        }
        return view('components.movie.card');
    }
}
