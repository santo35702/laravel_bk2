<?php

namespace App\Http\Livewire\Frontend\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Cart;

class ListByCategoryPage extends Component
{
    public $sorting;
    public $pagesize;
    public $slug;

    public function mount($slug)
    {
        $this->sorting = 'default';
        $this->pagesize = 20;
        $this->slug = $slug;
    }

    public function AddToCart(Request $request, $id, $title, $price)
    {
        Cart::instance('cart')->add($id, $title, 1, $price)->associate('App\Models\Product');
        $request->session()->flash('status', 'Product Add to Cart successful!');
        return redirect()->route('cart');
    }

    public function render()
    {
        $category = Category::where('slug', $this->slug)->first();

        if ($this->sorting === 'name') {
            $products = Product::where('category_id', $category->id)->orderBy('title', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'name-desc') {
            $products = Product::where('category_id', $category->id)->orderBy('title', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'price') {
            $products = Product::where('category_id', $category->id)->orderBy('regular_price', 'asc')->paginate($this->pagesize);
        } else if ($this->sorting === 'price-desc') {
            $products = Product::where('category_id', $category->id)->orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'date') {
            $products = Product::where('category_id', $category->id)->orderBy('created_at', 'DESC')->paginate($this->pagesize);
        } else if ($this->sorting === 'date-desc') {
            $products = Product::where('category_id', $category->id)->orderBy('created_at', 'ASC')->paginate($this->pagesize);
        } else {
            $products = Product::where('category_id', $category->id)->paginate($this->pagesize);
        }

        $popular_products = Product::inRandomOrder()->limit(5)->get();
        return view('livewire.frontend.product.list-by-category-page', ['products' => $products, 'popular_products' => $popular_products, 'category' => $category])->layout('layouts.base');
    }
}
