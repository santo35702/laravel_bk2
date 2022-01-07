<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;

class AddPage extends Component
{
    use WithFileUploads;
    
    public $title;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status;
    public $featured;
    public $image;
    public $category;
    public $quantity;

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'title' => 'required|max:255',
            'slug' => 'required|unique:products|max:255',
            'short_description' => 'required',
            'regular_price' => 'required|numeric',
            'image' => 'required|mimes:jpeg,jpg,png',
            'category' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'sku' => 'required',
        ]);
    }

    public function storeItem(Request $request)
    {
        $this->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:products|max:255',
            'short_description' => 'required',
            'regular_price' => 'required|numeric',
            'image' => 'required|mimes:jpeg,jpg,png',
            'category' => 'required',
            'description' => 'required',
            'quantity' => 'required|numeric',
            'sku' => 'required',
        ]);

        $product = new Product();
        $product->title = $this->title;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->sku = $this->sku;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('product-images', $imageName);
        $product->image = $imageName;
        $product->category_id = $this->category;
        $product->save();
        $request->session()->flash('status', 'New Product Created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.product.add-page')->layout('layouts.admin');
    }
}
