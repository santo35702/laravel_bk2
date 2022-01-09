<?php

namespace App\Http\Livewire\Admin\Carousel;

use Livewire\Component;

class AddCarouselPage extends Component
{
    public function render()
    {
        return view('livewire.admin.carousel.add-carousel-page')->layout('layouts.admin');
    }
}
