<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logut extends Component
{
    public function render()
    {
        return view('livewire.logut');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
