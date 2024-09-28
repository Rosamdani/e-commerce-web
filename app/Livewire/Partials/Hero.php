<?php

namespace App\Livewire\Partials;

use App\Models\Banner;
use Livewire\Component;

class Hero extends Component
{
    public function render()
    {
        $banners = Banner::where('status', 'active')->where('size', 'large')->get();
        $smallBanners = Banner::where('status', 'active')->where('size', 'small')->limit(3)->get();
        return view('livewire.partials.hero', [
            'banners' => $banners,
            'smallBanners' => $smallBanners
        ]);
    }
}