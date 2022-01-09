<?php

namespace App\Http\Livewire\Admin\Carousel;

use Livewire\Component;
use App\Models\HomeCarousel;
use Illuminate\Http\Request;

class CarouselPage extends Component
{
    public function deleteItem(Request $request, $id)
    {
        $carousel = HomeCarousel::find($id);
        $carousel->delete();
        $request->session()->flash('status', 'Carousel has been Deleted successfully!');
        return redirect()->route('admin.carousel.index');
    }
    
    public function render()
    {
        $carousel = HomeCarousel::get();
        return view('livewire.admin.carousel.carousel-page', ['carousel' => $carousel])->layout('layouts.admin');
    }
}
