<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    FacilityController,
    TicketController,
    CarrierController,
};

Route::get('/', function () {
    return view('index');
})->name('index');

Route::middleware('auth')->group(function () {
    Route::prefix('/noc')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('noc.index');

        Route::prefix('/facilities')->group(function () {
            Route::get('/', [FacilityController::class, 'index'])->name('noc.facilities.index');
            Route::get('/create', [FacilityController::class, 'create'])->name('noc.facilities.create');
            Route::delete('/destroy/{facility}', [FacilityController::class, 'destroy'])->name('noc.facilities.destroy');
            Route::post('/store', [FacilityController::class, 'store'])->name('noc.facilities.store');
        });

        Route::prefix('/tickets')->group(function () {
            Route::get('/', [TicketController::class, 'index'])->name('noc.tickets.index');
        });

        Route::prefix('/carriers')->group(function () {
            Route::get('/', [CarrierController::class, 'index'])->name('noc.carriers.index');
        });
    });
});

require __DIR__.'/auth.php';
