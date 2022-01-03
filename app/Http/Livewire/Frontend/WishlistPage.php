<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class WishlistPage extends Component
{
    public function render()
    {
        return view('livewire.frontend.wishlist-page')->layout('layouts.base');
    }
}
