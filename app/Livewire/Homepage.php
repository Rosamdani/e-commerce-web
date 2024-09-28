<?php

namespace App\Livewire;

use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Homepage extends Component
{

    public function addToCart($product_id)
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // Arahkan ke halaman login
        }
    }

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