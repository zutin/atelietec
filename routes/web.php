<?php

use App\Http\Controllers\{CarrierController,
    ContactController,
    DashboardController,
    FacilityController,
    IndexController,
    TicketController,
};
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('', [IndexController::class, 'index'])->name('index');
    Route::post('/send-email', [IndexController::class, 'sendEmail'])->name('send.email');

    Route::get('/about', function () {
        return view('home.about');
    })->name('about');

    Route::get('/services', function () {
        return view('home.services');
    })->name('services');

    Route::get('/thank-you', function () {
        return view('home.thank-you');
    })->name('thank-you');
});

Route::prefix('/contact')->group(function () {
    Route::get('', [ContactController::class, 'index'])->name('contact');
    Route::post('/send', [ContactController::class, 'store'])->name('contact.store');
});

Route::middleware('auth')->group(function () {
    Route::prefix('/noc')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('noc.index');
        Route::get('/search', [DashboardController::class, 'search'])->name('noc.protocol.search');
        Route::put('/update/protocol/{id}', [DashboardController::class, 'update'])->name('noc.protocol.update');
        Route::delete('/destroy/protocol/{call}', [DashboardController::class, 'destroy'])->name('noc.protocol.destroy');

        Route::prefix('/facilities')->group(function () {
            Route::get('/', [FacilityController::class, 'index'])->name('noc.facilities.index');
            Route::get('/edit/{id}/', [FacilityController::class, 'edit'])->name('facility.edit');
            Route::put('/edit/{id}/submit', [FacilityController::class, 'update'])->name('facility.update');
            Route::get('/create', [FacilityController::class, 'create'])->name('noc.facilities.create');
            Route::get('/search', [FacilityController::class, 'search'])->name('noc.facilities.search');
            Route::delete('/destroy/{facility}', [FacilityController::class, 'destroy'])->name('noc.facilities.destroy');
            Route::post('/store', [FacilityController::class, 'store'])->name('noc.facilities.store');
        });

        Route::prefix('/tickets')->group(function () {
            Route::get('/', [TicketController::class, 'index'])->name('noc.tickets.index');
            Route::post('/store', [TicketController::class, 'store'])->name('noc.tickets.store');
            Route::get('/search', [TicketController::class, 'search'])->name('noc.tickets.search');
        });

        Route::prefix('/carriers')->group(function () {
            Route::get('/', [CarrierController::class, 'index'])->name('noc.carriers.index');
            Route::get('/search', [CarrierController::class, 'search'])->name('noc.carriers.search');
            Route::get('/create', [CarrierController::class, 'create'])->name('noc.carriers.create');
            Route::delete('/destroy/{carrier}', [CarrierController::class, 'destroy'])->name('noc.carriers.destroy');
            Route::post('/store', [CarrierController::class, 'store'])->name('noc.carriers.store');
        });
    });
});

require __DIR__ . '/auth.php';
