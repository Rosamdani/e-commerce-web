<?php

use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\CartPage;
use App\Livewire\Homepage;
use App\Livewire\ProductDetail;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class);
Route::get('/login', LoginPage::class);
Route::get('/register', RegisterPage::class);
Route::get('/product', ProductDetail::class);
Route::get('/profile', Profile::class);
Route::get('/cart', CartPage::class);