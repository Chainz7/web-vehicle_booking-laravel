<?php

use Illuminate\Support\Facades\Route;


// ROUTES
Route::get('/', function () {
    return view('login');
});

// ROUTES ADMIN
Route::prefix('/admin')->group(function () {
    Route::get('', function () {
        return view('admin.index');
    });
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
    Route::get('/vehicle', 'App\Http\Controllers\MasterVehicleController@index')->name('vehicle.index');
    Route::get('/vehicle/choose/{id}', 'App\Http\Controllers\MasterVehicleController@choose')->name('vehicle.choose');
    Route::get('/driver', 'App\Http\Controllers\DriverController@index')->name('driver.index');
    Route::get('/driver/choose/{id}', 'App\Http\Controllers\DriverController@chooseDriver')->name('driver.choose');
    Route::get('/agreement', 'App\Http\Controllers\AgreementController@index')->name('agreement.index');
    Route::get('/agreement/choose/{id}', 'App\Http\Controllers\AgreementController@chooseAgreement')->name('agreement.choose');
    Route::get('/monitoring', 'App\Http\Controllers\MonitoringController@index')->name('monitoring.index');
});
