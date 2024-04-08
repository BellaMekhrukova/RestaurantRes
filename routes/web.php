<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WaiterController;
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
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/restaurant', [RestaurantController::class, 'index']);
Route::get('/restaurant/{id}', [RestaurantController::class, 'show']);
Route::get('/table', [TableController::class, 'index']);
Route::get('/table/{id}', [TableController::class, 'show']);
Route::get('/reservation', [ReservationController::class, 'index']);
Route::get('/waiter', [WaiterController::class, 'index']);
Route::get('/waiter/{id}', [WaiterController::class, 'show']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/reservation/create', [ReservationController::class,'create'])->name('create')->middleware('auth');
Route::post('/reservation', [ReservationController::class,'store']);
Route::get('/reservation/edit/{id}', [ReservationController::class, 'edit'])->name('reservation.edit')->middleware('auth');
Route::post('/reservation/update/{id}', [ReservationController::class, 'update'])->name('reservation.update')->middleware('auth');
Route::get('/reservation/destroy/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy')->middleware('auth');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/auth', [LoginController::class, 'authenticate']);
Route::get('/error', function () { return view('error', ['message'=> session('message')]);});
