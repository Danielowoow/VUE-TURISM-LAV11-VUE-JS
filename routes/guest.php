<?php

use Illuminate\Foundation\Application;
use App\Http\Controllers\Guest\GuestHomeController;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ElimiarController;


use App\Http\Controllers\Guest\GuestTourController;


Route::get('/', [GuestHomeController::class, 'index'])->name('home');



Route::get('/tours', [GuestTourController::class, 'index'])->name('tours.index');
//eliminar xd PUTO EL QUE LO LEA
Route::get('/xd',[ElimiarController::class,'index'])->name('xd');
