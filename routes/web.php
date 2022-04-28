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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('home');

//Hour Tracking and Daily Overview Form
Route::get('dashboard.tracking', 'App\Http\Controllers\TrackingController@index')->name('tracking');


Route::get('/starwars', 'App\Http\Controllers\Controller@apiFun');
//Route::get('/queryData', 'App\Http\Controllers\DashboardController@showBigQueryData')->name('Dashboard.queryData');

Route::post('/dashboard.tracking', 'App\Http\Controllers\TrackingController@save')->name('Tracking-Submit');
Route::get('/tracking-component', 'App\Http\Controllers\TrackingController@index')->name('TrackingComponent');

Route::get('/show/{entry_id}', 'App\Http\Controllers\TrackingController@show')->name('show');


require __DIR__.'/auth.php';
