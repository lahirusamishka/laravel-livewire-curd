<?php

namespace App\Http\Livewire;

use App\Models\customer as ModelsCustomer;
use Livewire\Component;

class Customer extends Component
{
    public function render()
    {
        $customers = ModelsCustomer::orderBy('id', 'DESC')->get();
        return view('livewire.customer', ['customers' => $customers]);
    }
}
