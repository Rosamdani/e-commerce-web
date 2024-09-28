<?php

namespace App\Livewire\Partials;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavbarTop extends Component
{
    public function render()
    {
        $isLoggedIn = false;
        if (Auth::check()) {
            $isLoggedIn = true;
        }
        return view('livewire.partials.navbar-top', [
            'isLoggedIn' => $isLoggedIn
        ]);
    }
}