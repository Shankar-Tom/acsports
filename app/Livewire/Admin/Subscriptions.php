<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Subscription;
class Subscriptions extends Component
{
    use WithPagination;
    #[\Livewire\Attributes\Computed]
    public function subscriptions()
    {
        return \App\Models\Subscription::paginate();
    }

    public function render()
    {
        return view('livewire.admin.subscriptions');
    }
}
