<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);
        auth()->user()->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);
    }


    public function render()
    {
        return view('livewire.admin.profile');
    }
}
