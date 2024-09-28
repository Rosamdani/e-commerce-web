<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class NavbarBottom extends Component
{
    public function render()
    {
        $categories = \App\Models\Category::limit(10)->get();
        return view('livewire.partials.navbar-bottom', [
            'categories' => $categories
        ]);
    }
}