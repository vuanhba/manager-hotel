<?php


use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\RoomController;
use App\Http\Controllers\backend\AmenitiesController;
use App\Http\Controllers\backend\PackagesController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\RoomTypeController;
use App\Http\Controllers\client\HomeController;
use GuzzleHttp\Middleware;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('roomlist/{id}',[HomeController::class,'roomList'])->name('roomList');
Route::get('roomdetails/{id}',[HomeController::class,'roomDetails'])->name('roomDetails');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login',[loginController::class,'getForm'])->name('getform');
Route::post('login',[loginController::class,'login'])->name('login');


});


Route::prefix('admin')->middleware('login')->name('admin.')->group(function () {

    Route::get('/',[RoomTypeController::class,'das'])->name('das');

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







});

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('index');
    Route::get('/add',[UserController::class,'getform'])->name('getform');
    Route::post('/add',[UserController::class,'store'])->name('store');
    Route::get('/edit/{id}',[UserController::class,'getDataEdit'])->name('getDataEdit');
    Route::post('/edit/{id}',[UserController::class,'edit'])->name('edit');
    Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete');

});

    Route::prefix('amenities')->name('amenities.')->group(function () {
        Route::get('/',[AmenitiesController::class,'index'])->name('index');
        Route::get('/add',[AmenitiesController::class,'getform'])->name('getform');
        Route::post('/add',[AmenitiesController::class,'store'])->name('store');
        Route::get('/edit/{id}',[AmenitiesController::class,'getDataEdit'])->name('getDataEdit');
        Route::post('/edit/{id}',[AmenitiesController::class,'edit'])->name('edit');
        Route::get('/delete/{id}',[AmenitiesController::class,'delete'])->name('delete');

    });
    Route::prefix('packages')->name('packages.')->group(function () {
        Route::get('/',[PackagesController::class,'index'])->name('index');
        Route::get('/add',[PackagesController::class,'getform'])->name('getform');
        Route::post('/add',[PackagesController::class,'store'])->name('store');
        Route::get('/edit/{id}',[PackagesController::class,'getDataEdit'])->name('getDataEdit');
        Route::post('/edit/{id}',[PackagesController::class,'edit'])->name('edit');
        Route::get('/delete/{id}',[PackagesController::class,'delete'])->name('delete');

    });

Route::get('logout',[loginController::class,'logout'])->name('logout');



});



