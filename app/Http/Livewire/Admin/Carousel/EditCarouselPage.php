<?php

namespace App\Http\Livewire\Admin\Carousel;

use Livewire\Component;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use App\Models\HomeCarousel;

class EditCarouselPage extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $link;
    public $image;
    public $status;
    public $newImage;

    public function mount($id)
    {
        $carousel = HomeCarousel::find($id);
        $this->title = $carousel->title;
        $this->subtitle = $carousel->subtitle;
        $this->link = $carousel->link;
        $this->image = $carousel->image;
        $this->status = $carousel->status;
        $this->carousel_id = $carousel->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required|max:255',
            'subtitle' => 'required|max:255',
            'link' => 'required|max:255',
            // 'image' => 'required|mimes:jpeg,jpg,png',
            'status' => 'required',
        ]);
    }

    public function updateItem(Request $request)
    {
        $this->validate([
            'title' => 'required|max:255',
            'subtitle' => 'required|max:255',
            'link' => 'required|max:255',
            // 'image' => 'required|mimes:jpeg,jpg,png',
            'status' => 'required',
        ]);

        $carousel = HomeCarousel::find($this->carousel_id);
        $carousel->title = $this->title;
        $carousel->subtitle = $this->subtitle;
        $carousel->link = $this->link;
        if ($this->newImage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newImage->extension();
            $this->newImage->storeAs('slideshow-banners', $imageName);
            $carousel->image = $imageName;
        }
        $carousel->status = $this->status;
        $carousel->save();
        $request->session()->flash('status', 'Home Carousel has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.carousel.edit-carousel-page')->layout('layouts.admin');
    }
}
