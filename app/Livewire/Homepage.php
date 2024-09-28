<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        $products = Products::where('status', 'active')->limit(10)->get();
        foreach ($products as $product) {
            // Slice image array to 2 varable
            $firstTwoImages = array_slice($product->images, 0, 2);
            $product->img1 = $firstTwoImages[0] ?? null;
            $product->img2 = $firstTwoImages[1] ?? null;
        }
        return view('livewire.homepage', [
            'products' => $products
        ]);
    }
}