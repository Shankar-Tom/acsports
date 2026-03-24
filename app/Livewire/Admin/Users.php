<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    #[Computed(true)]
    public function users()
    {
        return User::where('role', 'user')->paginate();
    }
    public function render()
    {
        return view('livewire.admin.users');
    }
}
