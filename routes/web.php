<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\PostHouseController;
use App\Http\Controllers\RentalRequestController;
use App\Http\Controllers\UserController;
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

Route::middleware('guest')->group(function (){
    Route::get('/register', [AuthController::class, 'showPageRegister'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::prefix('login')->group(function () {
        // Normal login
        Route::get('/', [AuthController::class, 'showPageLogin'])->name('auth.login');
        Route::post('/', [AuthController::class, 'login'])->name('login');

        // Login with google
        Route::get('/google', [AuthController::class, 'loginWithGoogle'])->name('login.google');
        Route::get('/google/callback', [AuthController::class, 'loginWithGoogleCallBack'])->name('login.google.callback');
    });
});

Route::prefix('houses')->group(function () {
    Route::get('/', [HouseController::class, 'list'])->name('house.list');
    Route::get('/info/{id}', [HouseController::class, 'info'])->name('house.info');
    Route::get('/search_house', [HouseController::class, 'searchHouse'])->name('house.search');
    Route::middleware('auth')->group(function () {
        Route::get('/create', [HouseController::class, 'create'])->name('house.create');
        Route::post('/store', [HouseController::class, 'store'])->name('house.store');
        Route::get('/edit/{id}', [HouseController::class, 'edit'])->name('house.edit');
        Route::post('/update/{id}', [HouseController::class, 'update'])->name('house.update');
    });
});
Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::prefix('user')->group(function () {
        Route::get('/listPost', [PostHouseController::class, 'getAllPost'])->name('listPost');
        Route::get('/infoPost/{id}',[PostHouseController::class,'infoPost'])->name('infoPost');
        Route::post('/update/{id}',[PostHouseController::class,'update'])->name('updatePost');
    });
    Route::prefix('request')->group(function () {
        Route::post('/create/{houseId}', [RentalRequestController::class, 'create'])->name('rentalRequest.create');
        Route::get('/update/{id}', [RentalRequestController::class, 'update'])->name('rentalRequest.update');
    });

    Route::prefix('user')->group(function () {
        Route::get('/profile', [UserController::class, 'showPageUserProfile'])->name('user.profile');
        Route::post('/profile', [UserController::class, 'updateProfile'])->name('updateProfile');

        Route::get('/change_password', [UserController::class, 'showPageChangePassword'])->name('user.changePassword');
        Route::post('/change_password', [UserController::class, 'changePassword'])->name('changePassword');

        Route::get('/rental-request', [RentalRequestController::class, 'list'])->name('user.rentalRequest');
        Route::get('/my-rental-request', [RentalRequestController::class, 'myList'])->name('user.myRentalRequest');
    });
});

Route::get('/evaluate',[HouseController::class, 'evaluate'])->name('evaluate-house');
