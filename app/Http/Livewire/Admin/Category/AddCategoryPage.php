<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Category;

class AddCategoryPage extends Component
{
    public $name;
    public $slug;
    public $description;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories|max:255',
            'description' => 'required',
        ]);
    }

    function storeItem(Request $request)
    {
        $this->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories|max:255',
            'description' => 'required',
        ]);

        $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->description = $this->description;
        $category->save();
        $request->session()->flash('status', 'New Category Created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.category.add-category-page')->layout('layouts.admin');
    }
}
