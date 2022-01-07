<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Product;

class IndexPage extends Component
{
    public function render()
    {
        $products = Product::get();
        return view('livewire.admin.product.index-page', ['products' => $products])->layout('layouts.admin');
    }
}
