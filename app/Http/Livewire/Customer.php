<?php

namespace App\Http\Livewire;

use App\Models\customer as ModelsCustomer;
use Livewire\Component;

class Customer extends Component
{
    public $ids;
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

    public function edit($ids)
    {
        $customer = ModelsCustomer::where('id', $ids)->first();
        $this->ids = $customer->id;
        $this->firstname = $customer->firstname;
        $this->lastname = $customer->lastname;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
    }

    public function update()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        if ($this->ids) {
            $customer = ModelsCustomer::find($this->ids);
            $customer->update([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'email' => $this->email,
                'phone' => $this->phone
            ]);
            session()->flash('message', 'Customer Update Successfully !');
            $this->resetInputFields();
            $this->emit('customerUpdated');
        }
    }

    public function delete($id){
        ModelsCustomer::where('id', $id)->delete();
        session()->flash('message', 'Customer Delete Successfully !');
    }

    public function render()
    {
        $customers = ModelsCustomer::orderBy('id', 'DESC')->get();
        return view('livewire.customer', ['customers' => $customers]);
    }
}
