<?php

namespace App\Livewire\Admin;

use App\Livewire\Traits\ModalInteractions;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Plan;

class Plans extends Component
{
    use WithPagination, ModalInteractions;

    public $planName, $price, $duration, $isActive = true;

    #[Computed()]
    public function plans()
    {
        return Plan::latest()->paginate(2);
    }

    public function savePlan()
    {
        $this->validate([
            'planName' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|integer',
            'isActive' => 'required|boolean',
        ]);
        if ($this->instransit) {
            $plan = $this->instransit;
        } else {
            $plan = new Plan();
        }
        $plan->name = $this->planName;
        $plan->price = $this->price;
        $plan->duration = $this->duration;
        $plan->is_active = $this->isActive;
        $plan->save();
        $this->dispatch('success', message: 'Plan saved successfully');

        $this->closeModal();
    }

    public function edit(Plan $plan)
    {
        $this->planName = $plan->name;
        $this->price = $plan->price;
        $this->duration = $plan->duration;
        $this->isActive = $plan->is_active;
        $this->instransit = $plan;
        $this->openModal();
    }

    public function delete(Plan $plan)
    {
        $plan->delete();
        $this->dispatch('info', message: 'Plan deleted successfully');
    }

    public function render()
    {
        return view('livewire.admin.plans');
    }
}
