<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ROUTES
Route::get('/', function () {
    return view('login');
});
// DEFAULT ADMIN
Route::get('/admin/head', function () {
    return view('admin.head');
});
Route::get('/admin/foot', function () {
    return view('admin.foot');
});
Route::get('/admin/aside', function () {
    return view('admin.aside');
});
Route::get('/admin/navbar', function () {
    return view('admin.navbar');
});
Route::get('/admin/footer', function () {
    return view('admin.footer');
});
// ROUTES ADMIND
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('dashboard', 'App\Http\Controllers\DashboardController@index');
Route::get('vehicle', 'App\Http\Controllers\MasterVehicleController@index')->name('vehicle.index');
Route::get('/vehicle/choose/{id}', 'App\Http\Controllers\MasterVehicleController@choose')->name('vehicle.choose');
Route::get('driver', 'App\Http\Controllers\DriverController@index')->name('driver.index');
Route::get('/driver/choose/{id}', 'App\Http\Controllers\DriverController@chooseDriver')->name('driver.choose');
Route::get('agreement', 'App\Http\Controllers\AgreementController@index')->name('agreement.index');
Route::get('/agreement/choose/{id}', 'App\Http\Controllers\AgreementController@chooseAgreement')->name('agreement.choose');
Route::get('monitoring', 'App\Http\Controllers\MonitoringController@index')->name('monitoring.index');
