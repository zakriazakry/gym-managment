<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::post('/login', [authController::class, 'login']);

Route::prefix('dashborad')->group(function () {
    Route::get('/', function () {
        return redirect()->route('dasboradHome');
    });

    Route::get('/home', function () {
        return view('pages.home.home', [
            'data' => [
                [
                    'name' => 'عدد الأعضاء',
                    'value' => '234'
                ],
                [
                    'name' => 'عدد المشتركين',
                    'value' => '180'
                ],
                [
                    'name' => 'عدد المدربين',
                    'value' => '12'
                ], [
                    'name' => 'المعاملات اليومية',
                    'value' => '14 م'
                ], [
                    'name' => 'المعاملات الشهرية',
                    'value' => '234 م'
                ], [
                    'name' => 'المعاملات السنوية',
                    'value' => '459 م'
                ], [
                    'name' => 'المدفوعات اليومية',
                    'value' => '234 د.ل'
                ], [
                    'name' => 'المربح اليومي',
                    'value' => '70 د.ل'
                ], [
                    'name' => 'المدفوعات الشهرية',
                    'value' => '1,450 د.ل'
                ], [
                    'name' => 'المربح الشهري',
                    'value' => '650 د.ل'
                ], [
                    'name' => 'المدفوعات السنوية',
                    'value' => '35,000 د.ل'
                ], [
                    'name' => 'المربح السنوي',
                    'value' => '25,650'
                ],
            ]
        ]);
    })->name('dashboardHome');

    Route::get('/customers', function () {
        return view('pages.home.customers');
    })->name('dashboradCustomers');

    Route::get('/customers/new', function () {
        return view('pages.controller.addNewCustomer');
    })->name('dashboradCustomersNew');

    Route::get('/customers/edit', function () {
        return view('pages.controller.EditCustomer');
    })->name('dashboradCustomersEdit');
    // ==========================================
    Route::get('/coachs/new', function () {
        return view('pages.controller.addNewCoachs');
    })->name('dashboradCoachsNew');

    Route::get('/coachs/edit', function () {
        return view('pages.controller.EditCoachs');
    })->name('dashboradCoachsEdit');

    Route::get('/coachs', function () {
        return view('pages.home.coachs');
    })->name('dashboradCoachs');

    Route::get('/payment', function () {
        return view('pages.home.Payments');
    })->name('dashboradPayment');
});
