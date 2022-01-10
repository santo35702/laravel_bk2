<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Cart;

class ListPage extends Component
{
    public $sorting;
    public $pagesize;

    public $min_price;
    public $max_price;

    public function mount()
    {
        $this->sorting = 'default';
        $this->pagesize = 20;

        $this->min_price = 1;
        $this->max_price = 1000;
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
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('title', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'name-desc') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('title', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'price') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('regular_price', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'price-desc') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'date') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'date-desc') {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->orderBy('created_at', 'ASC')->paginate($this->pagesize);
        } else {
            $products = Product::whereBetween('regular_price', [$this->min_price, $this->max_price])->paginate($this->pagesize);
        }

        $popular_products = Product::inRandomOrder()->limit(5)->get();
        $sale = Sale::find(1);
        return view('livewire.frontend.product.list-page', ['products' => $products, 'popular_products' => $popular_products, 'sale' => $sale])->layout('layouts.base');
    }
}
