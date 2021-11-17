<?php

namespace App\Http\Livewire\Storefront\Backend;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminProfile extends Component
{
    public $name = 'Javaughn Bailey';
    public $email = 'javaughnbailey21@gmail.com';
    public $password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
    public $passwordCheck;

    public function changeName(){


        User::update([
           'name' => $this->name
        ]);

    }

    public function changePass()
    {
        $this->dispatchBrowserEvent('change-password-check-open');
    }

    public function changePassCheck()
    {
        if (!Hash::check($this->passwordCheck,$this->password)) {
            dd('hush dawq');
        }
        $this->dispatchBrowserEvent('change-password-check-close');
        $this->dispatchBrowserEvent('change-password-view-open');

    }

    public function changePassView()
    {

    }

    public function changePassAction()
    {

//        $user = User::find(auth()->id());

        User::update([
            'name' => $this->name,
            'password' => $this->password,
        ]);

    }

    public function render()
    {
        return view('livewire.storefront.backend.admin-profile')
            ->extends('layouts.storeBackend');
    }
}
