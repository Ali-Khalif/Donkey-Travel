<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HerbergenController;
use App\Http\Controllers\OvernachtingenController;
use App\Http\Controllers\PauzeplaatsenController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
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



Route::get('/', [BookingController::class, 'create'])->name('booking.create');
Route::get('/mijnbooking', [BookingController::class, 'MijnBooking'])->name('booking.MijnBooking');


//route search
Route::get('/search', [TripController::class, 'search'])->name('search');

Auth::routes(['verify' => true]);
//user profile homepage
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/admin', function () {
    return view('layouts.Admin');
})->middleware('admin');

Route::middleware(['admin'])->group(function () {
    Route::resource('/booking', BookingController::class
        , ['except' => ['create', 'store', 'destroy']]);
    Route::resource('/overnachtingen', OvernachtingenController::class);
    Route::resource('/pauzeplaatsen', PauzeplaatsenController::class);
    Route::resource('/herbergen', HerbergenController::class);
    Route::resource('/restaurant', RestaurantController::class);
    Route::resource('/trips', TripController::class);
    Route::resource('/status', StatusController::class);
});

Route::resource('/profile', UserController::class,
    ['only' => [ 'edit', 'update', 'destroy']])->middleware('verified');

//route resource for booking create and store
Route::resource('/booking', BookingController::class,
    ['only' => [ 'store', 'show', 'edit', 'update', 'destroy']])->middleware('verified');

//search overnachtingen
//Route::get('/search', [OvernachtingenController::class, 'search'])->name('search');
