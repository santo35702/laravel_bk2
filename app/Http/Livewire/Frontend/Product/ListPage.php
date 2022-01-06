<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class ListPage extends Component
{
    public $sorting;
    public $pagesize;

    public function mount()
    {
        $this->sorting = 'default';
        $this->pagesize = 20;
    }

    public function AddToCart(Request $request, $id, $title, $price)
    {
        Cart::instance('cart')->add($id, $title, 1, $price)->associate('App\Models\Product');
        $request->session()->flash('status', 'Product Add to Cart successful!');
        return redirect()->route('cart');
    }

    public function render()
    {
        if ($this->sorting === 'name') {
            $products = Product::orderBy('title', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'name-desc') {
            $products = Product::orderBy('title', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'price') {
            $products = Product::orderBy('regular_price', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'price-desc') {
            $products = Product::orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'date') {
            $products = Product::orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'date-desc') {
            $products = Product::orderBy('created_at', 'ASC')->paginate($this->pagesize);
        } else {
            $products = Product::paginate($this->pagesize);
        }

        $popular_products = Product::inRandomOrder()->limit(5)->get();
        return view('livewire.frontend.product.list-page', ['products' => $products, 'popular_products' => $popular_products])->layout('layouts.base');
    }
}
