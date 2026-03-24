<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password, 'role' => 'admin'])) {
            return redirect()->route('admin.dashboard');
        }

        $this->addError('email', 'Invalid credentials');
    }

    public function render()
    {
        return view('livewire.admin.login');
    }
}
