<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class HomeCategoryPage extends Component
{
    public function render()
    {
        return view('livewire.admin.home-category-page')->layout('layouts.admin');
    }
}
