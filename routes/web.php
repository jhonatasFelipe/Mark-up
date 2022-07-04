<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;


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

Route::prefix('/rooms')->group(function(){
    Route::get('/', [RoomsController::class,'index'])->name('RoomsList');
    Route::get('/create', [RoomsController::class,'create'])->name('RoomsCreate');
    Route::get('/delete/{id}', [RoomsController::class,'delete'])->name('RoomsDelete');
    Route::post('/update/{id}', [RoomsController::class,'update'])->name('RoomsUpdate');
    Route::post('/insert', [RoomsController::class,'insert'])->name('RoomsInsert');
    Route::get('/{id}', [RoomsController::class,'byId'])->name('RoomsById');
});

Route::prefix('/users')->group(function(){
    Route::get('/', [UserController::class,'index'])->name('UsersList');
    Route::get('/register', [UserController::class,'create'])->name('UsersRegister');
    Route::post('/insert', [UserController::class,'insert'])->name('UsersInsert');
    Route::get('/{id}', [UserController::class,'byId'])->name('UsersById');
    Route::post('/update/{id}', [UserController::class,'update'])->name('UsersUpdate');
});

Route::prefix('/booking')->group(function(){
    Route::get('/listTimes/{room}', [BookingController::class,'ListTimes'])->name('ListTimes');
    Route::get('/book',[BookingController::class, 'insert'])->name('Book');
    Route::get('/unbook',[BookingController::class,'delete'])->name('unbook');
});

