<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Product;

class DetailsPage extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $related_products = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(10)->get();
        return view('livewire.frontend.product.details-page', ['product' => $product, 'related_products' => $related_products])->layout('layouts.base');
    }
}
