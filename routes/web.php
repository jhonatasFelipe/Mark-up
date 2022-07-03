<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;

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
});

