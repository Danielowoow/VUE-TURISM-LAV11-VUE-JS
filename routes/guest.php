<?php

use App\Http\Controllers\Guest\GuestDestinationController;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Guest\GuestHomeController;
use App\Http\Controllers\Guest\GuestShoppingCartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\GuestSubscriberController;
use Inertia\Inertia;


use App\Http\Controllers\Guest\GuestTourController;

use App\Http\Controllers\TestController;


Route::get('/', [GuestHomeController::class, 'index'])->name('home');



//Route::get('/tours/index', [GuestTourController::class, 'index'])->name('tours.index');
//Route::get('/tours/show', [GuestTourController::class, 'show'])->name('tours.show');

Route::get('/tours', [GuestTourController::class, 'index'])->name('tours.index');
//Route::get('/tours/{tour}', [GuestTourController::class, 'show'])->name('tours.show');

Route::get('/tours/{tour:slug}', [GuestTourController::class, 'show'])->name('tours.show');

//RUTAS  CART

Route::get('/cart', [GuestShoppingCartController::class, 'index'])->name('cart.index');
Route::post('/add-to-cart', [GuestShoppingCartController::class, 'addToCart'])->name('cart.add');


//Rutas Destinos
Route::get('/destinations', [GuestDestinationController::class, 'index'])->name('destinations.index');



//
Route::post('/subscribe', [GuestSubscriberController::class, 'store']);


//eliminar xd PUTO EL QUE LO LEA

Route::get('/test-redis', function () {
    cache()->store('redis')->put('key', 'Redis is working!', 10);
    return cache()->store('redis')->get('key');
});
