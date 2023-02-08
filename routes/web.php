<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdatePhotoController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/', [HomeController::class, 'store'])->name('home.store');


Route::get('/userMessage', [UsersController::class, 'index'])->name('usersMessage');
Route::get('/userMessage/{user}', [UsersController::class, 'show'])->name('usersMessageShow');


Route::post('/photoProfile/{photo}', [UpdatePhotoController::class, 'update'])->name('updatePhoto');


Route::resource('profile', ProfileController::class)->names('profiles');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
