<?php

use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;


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
    return view('index');
});

Route::get('/lol', function () {
    return view('status.lol');
});


//route search
Route::get('/search', [TripController::class, 'search'])->name('search');

Auth::routes();
//Route::resource('status', StatusController::class)->middleware('admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//if user is_admin = true then redirect to route::resource('admin', 'AdminController');
Route::get('/admin', function () {
    return view('admin.index');
})->middleware('is_admin');

Route::get('/admin', function () {
    return view('layouts.Admin');
})->middleware('admin');

Route::group(['middleware' => 'admin'], function () {
    Route::resource('/trips', TripController::class);
    Route::resource('/status', StatusController::class);
});


