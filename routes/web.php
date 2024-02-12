<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/test', [UserController::class, 'test']);

Route::prefix('admin')->group(function () {
Route::resource('partners', PartnerController::class);
Route::resource('projects', ProjectController::class);
Route::resource('', ArtistController::class);
Route::resource('', AdminController::class);
Route::resource('users', UserController::class);


});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
