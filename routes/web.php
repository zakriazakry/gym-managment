<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::post('/login', [authController::class, 'login']);

Route::prefix('dashborad')-> group(function () {
    Route::get('/', function () {
        return redirect()->route('dasboradHome');
    });

    Route::get('/home', function () {
        return view('pages.home.home');
    })->name('dashboardHome');

    Route::get('/customers', function () {
        return view('pages.home.customers');
    })->name('dashboradCustomers');

    Route::get('/customers/new', function () {
        return view('pages.controller.addNewCustomer');
    })->name('dashboradCustomersNew');

    Route::get('/coachs', function () {
        return view('pages.home.coachs');
    })->name('dashboradCoachs');

    Route::get('/payment',function () {
        return view('pages.home.Payments');
    })->name('dashboradPayment');
});