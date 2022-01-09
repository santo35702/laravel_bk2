<?php

namespace App\Http\Livewire\Admin\Carousel;

use Livewire\Component;
use App\Models\HomeCarousel;

class CarouselPage extends Component
{
    public function render()
    {
        $carousel = HomeCarousel::get();
        return view('livewire.admin.carousel.carousel-page', ['carousel' => $carousel])->layout('layouts.admin');
    }
}
