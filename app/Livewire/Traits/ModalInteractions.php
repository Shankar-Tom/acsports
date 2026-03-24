<?php

namespace App\Livewire\Traits;

trait ModalInteractions
{
    public bool $showModal = false;
    public $instransit;
    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->reset();
        $this->showModal = false;
    }
}
