<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[UserController::class,'login'])->name('login');
Route::post('loginop',[UserController::class,'loginop'])->name('loginop');

Route::middleware('auth')->group(function(){
    Route::controller(UserController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('logout', 'logout')->name('logout');
    });

    route::resource('category', CategoryController::class);
    route::resource('location', LocationController::class);
    route::resource('address', AddressController::class);

    Route::controller(EventController::class)->group(function () {
        Route::get('event', 'event')->name('event.index');
        Route::post('eventop', 'eventop')->name('eventop');
        Route::post('eventshow', 'eventshow');
        Route::post('editevent','editevent');
        Route::post('editeventop', 'editeventop');
    });

    Route::controller(BookingController::class)->group(function () {
        Route::get('show', 'show')->name('book.show');
    });
});



//
