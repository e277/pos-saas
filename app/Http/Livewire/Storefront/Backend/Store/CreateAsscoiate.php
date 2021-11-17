<?php

namespace App\Http\Livewire\Storefront\Backend\Store;

use App\Models\Store;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use Validator;

class CreateAsscoiate extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $password = '';
    public $user_type;

    public $associates;

    protected $rules = [
        'first_name' => 'required|max:12',
        'last_name' => 'required|max:12',
        'email' => 'required|email|unique:users',
//        'user_type' => 'required',
        'password' => 'required '
    ];


    public function newsalesassociate()
    {
        $this->validate();

        User::create([
            'name' => $this->first_name . " " . $this->last_name,
            'email' => $this->email,
            'user_type' => 3,
            'password' => Hash::make($this->password),
        ]);

        $this->associates = User::all();

        session()->flash('success', 'Sales Associate Added Successfully');


    }

    public function updated()
    {
        $this->validate();
    }

    function delete($id)
    {

        User::where('id','=',$id)->delete();

        $this->associates = User::all();
    }

    public function mount()
    {
        $this->password = Str::random(10);
        $this->associates = User::all();
    }

    public function render()
    {
        return view('livewire.storefront.backend.store.create-asscoiate',[
            'stores' => Store::all(),
        ])
            ->extends('layouts.storeBackend');
    }
}
