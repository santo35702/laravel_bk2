<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;

class IndexPage extends Component
{
    public function render()
    {
        return view('livewire.admin.category.index-page')->layout('layouts.admin');
    }
}
