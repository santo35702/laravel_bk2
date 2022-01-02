<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class CartPage extends Component
{
    public function render()
    {
        return view('livewire.frontend.cart-page')->layout('layouts.base');
    }
}
