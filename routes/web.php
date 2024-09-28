<?php

use App\Http\Middleware\AuthMiddleware;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\CartPage;
use App\Livewire\Homepage;
use App\Livewire\ProductDetail;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class)->name('home');
Route::get('/login', LoginPage::class)->name('login');
Route::get('/register', RegisterPage::class);
Route::get('/product/{product_id}', ProductDetail::class);
Route::get('/profile', Profile::class);
Route::get('/cart', CartPage::class)->middleware([AuthMiddleware::class]);