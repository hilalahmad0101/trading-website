<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Plan extends Component
{
    public function render()
    {
        return view('livewire.plan')->layout('layout.main');
    }
}
