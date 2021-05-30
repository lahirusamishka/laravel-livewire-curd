<?php

namespace App\Http\Livewire;

use App\Models\customer as ModelsCustomer;
use Livewire\Component;

class Customer extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;

    public function resetInputFields()
    {
        $this->firstname = "";
        $this->lastname = "";
        $this->email = "";
        $this->phone = "";
    }

    public function store()
    {
        $validateDate = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        ModelsCustomer::create($validateDate);
        session()->flash('message', 'Customer Create Successfully !');
        $this->resetInputFields();
        $this->emit('customerAdded');
    }

    public function render()
    {
        $customers = ModelsCustomer::orderBy('id', 'DESC')->get();
        return view('livewire.customer', ['customers' => $customers]);
    }
}
