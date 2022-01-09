<?php

namespace App\Http\Livewire\Admin\Carousel;

use Livewire\Component;

class EditCarouselPage extends Component
{
    public function render()
    {
        return view('livewire.admin.carousel.edit-carousel-page')->layout('layouts.admin');
    }
}
