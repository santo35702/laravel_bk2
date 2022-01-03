<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Product;

class IndexPage extends Component
{
    public function render()
    {
        $products = Product::paginate(20);
        return view('livewire.frontend.product.index-page', ['products' => $products])->layout('layouts.base');
    }
}
