<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminDestinationController;
use App\Http\Controllers\Admin\AdminToursController;

Route::middleware(['web', 'auth'])->group(function () {
    // Redirección desde /admin a /admin/dashboard
    Route::redirect('/admin', '/admin/dashboard');
    // Ruta para el dashboard de administración utilizando el controlador
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->middleware('can:admin.dashboard')
        ->name('admin.dashboard');
    //ruta para destinos de tipo resource
    Route::resource('admin/destinations', AdminDestinationController::class)
        ->names([
            'index' => 'admin.destinations.index',
            'create' => 'admin.destinations.create',
            'show' => 'admin.destinations.show',
            'edit' => 'admin.destinations.edit',
        ]);
    Route::resource('admin/tours', AdminToursController::class)
        ->names([
            'index' => 'admin.tours.index',
            'create' => 'admin.tours.create',
            'show' => 'admin.tours.show',
            'edit' => 'admin.tours.edit',
        ]);
});
