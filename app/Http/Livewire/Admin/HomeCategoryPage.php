<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\HomeCategory;

class HomeCategoryPage extends Component
{
    public $category_id = [];
    public $no_of_products;

    public function mount()
    {
        $category = HomeCategory::find(1);
        $this->category_id = explode(',', $category->category_id);
        $this->no_of_products = $category->no_of_products;
    }

    public function updateItem(Request $request)
    {
        $category = HomeCategory::find(1);
        $category->category_id = implode(',',$this->category_id);
        $category->no_of_products = $this->no_of_products;
        $category->save();
        $request->session()->flash('status', 'New Arrivals with Category has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.home-category-page')->layout('layouts.admin');
    }
}
