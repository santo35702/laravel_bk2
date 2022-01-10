<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Sale;
use Illuminate\Http\Request;

class SalePage extends Component
{
    public $sale_date;
    public $status;

    public function mount()
    {
        $sale = Sale::find(1);
        $this->sale_date = $sale->sale_date;
        $this->status = $sale->status;
    }

    public function updateSale(Request $request)
    {
        $sale = Sale::find(1);
        $sale->sale_date = $this->sale_date;
        $sale->status = $this->status;
        $sale->save();
        $request->session()->flash('status', 'Sale Time Updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.sale-page')->layout('layouts.admin');
    }
}
