<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\RoomController;
use App\Http\Controllers\backend\RoomTypeController;
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



Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('roomType')->name('roomType.')->group(function () {
    Route::get('/',[RoomTypeController::class,'index'])->name('index');
    Route::get('/add',[RoomTypeController::class,'getform'])->name('getform');
    Route::post('/add',[RoomTypeController::class,'store'])->name('store');



    Route::get('/edit/{id}',[RoomTypeController::class,'getDataEdit'])->name('getDataEdit');
    Route::post('/edit/{id}',[RoomTypeController::class,'edit'])->name('edit');
    Route::get('/soft-delete/{id}',[RoomTypeController::class,'softdelete'])->name('softdelete');
    Route::get('/trashed',[RoomTypeController::class,'trashed'])->name('trashed');
    Route::get('/restore/{id}',[RoomTypeController::class,'restore'])->name('restore');
    Route::get('/delete/{id}',[RoomTypeController::class,'delete'])->name('delete');





});
Route::prefix('room')->name('room.')->group(function () {
    Route::get('/',[RoomController::class,'index'])->name('index');
    Route::get('/add',[RoomController::class,'getform'])->name('getform');
    Route::post('/add',[RoomController::class,'store'])->name('store');
    Route::get('/edit/{id}',[RoomController::class,'getDataEdit'])->name('getDataEdit');
    Route::post('/edit/{id}',[RoomController::class,'edit'])->name('edit');
    Route::get('/delete/{id}',[RoomController::class,'delete'])->name('delete');
   
    Route::get('/delete/{id}',[RoomController::class,'delete'])->name('delete');





});
});
