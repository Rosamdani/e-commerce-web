<?php

namespace App\Livewire\Partials;

use App\Models\Banner;
use Livewire\Component;

class Hero extends Component
{
    public function render()
    {
        $banners = Banner::limit(3)->get();
        return view('livewire.partials.hero', [
            'banners' => $banners,
        ]);
    }
}