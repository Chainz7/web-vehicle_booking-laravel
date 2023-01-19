<?php

use Illuminate\Support\Facades\Route;


// ROUTES
Route::get('/', 'App\Http\Controllers\LoginController@index')->name('login.index');
Route::post('/login', 'App\Http\Controllers\LoginController@login')->name('login.login');
Route::get('/register', 'App\Http\Controllers\RegisterController@index')->name('register.index');
Route::post('/register/create', 'App\Http\Controllers\RegisterController@store')->name('register.store');
// ROUTES ADMIN

Route::prefix('/admin')->group(function () {
    Route::get('', function () {
        return view('/resources/views/admin/index.blade.php');
    });
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard.index');
    Route::get('/dashboard/choose/{id}', 'App\Http\Controllers\DashboardController@chooseDashboard')->name('dashboard.choose');
    Route::get('/vehicle', 'App\Http\Controllers\MasterVehicleController@index')->name('vehicle.index');
    Route::get('/vehicle/choose/{id}', 'App\Http\Controllers\MasterVehicleController@chooseVehicle')->name('vehicle.choose');
    Route::get('/driver', 'App\Http\Controllers\DriverController@index')->name('driver.index');
    Route::get('/driver/choose/{id}', 'App\Http\Controllers\DriverController@chooseDriver')->name('driver.choose');
    Route::get('/approver', 'App\Http\Controllers\ApproverController@index')->name('approver.index');
    Route::get('/approver/choose/{id}', 'App\Http\Controllers\ApproverController@chooseApprover')->name('approver.choose');
    Route::get('/monitoring', 'App\Http\Controllers\MonitoringController@index')->name('monitoring.index');
    Route::get('/booking', 'App\Http\Controllers\VehicleBookingController@index')->name('booking.index');
    Route::post('/vehiclebooking', 'App\Http\Controllers\VehicleBookingController@store')->name('vehiclebooking.store');
});
