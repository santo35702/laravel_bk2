<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class IndexPage extends Component
{
    public function AddToCart(Request $request, $id, $title, $price)
    {
        Cart::instance('cart')->add($id, $title, 1, $price)->associate('App\Models\Product');
        $request->session()->flash('status', 'Product Add to Cart successful!');
        return redirect()->route('cart');
    }
    
    public function render()
    {
        $products = Product::paginate(20);
        $popular_products = Product::inRandomOrder()->limit(5)->get();
        return view('livewire.frontend.product.index-page', ['products' => $products, 'popular_products' => $popular_products])->layout('layouts.base');
    }
}
