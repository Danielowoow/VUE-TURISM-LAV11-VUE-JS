<?php

use Illuminate\Foundation\Application;
use App\Http\Controllers\Guest\GuestHomeController;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ElimiarController;


use App\Http\Controllers\Guest\GuestTourController;

use App\Http\Controllers\TestController;
Route::get('/', [GuestHomeController::class, 'index'])->name('home');



Route::get('/tours', [GuestTourController::class, 'index'])->name('tours.index');
//eliminar xd PUTO EL QUE LO LEA
//PUTO EL Q LO LEA DE NUEVO :V NO JALA GUEST XD
Route::get('/xd',[ElimiarController::class,'index'])->name('xd');
Route::get('/lala',[TestController::class,'index'])->name('test');
