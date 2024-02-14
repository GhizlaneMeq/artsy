<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\artist\PartnerController as ArtistPartnerController;
use App\Http\Controllers\artist\ProjectController as ArtistProjectController;
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
/* Route::resource('partners', PartnerController::class);
Route::resource('projects', ProjectController::class);
Route::resource('artists', ArtistController::class);
Route::resource('', AdminController::class); */
Route::resource('users', UserController::class);
/* Route::resource('dashboard', AdminController::class); */


});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::prefix('artist')->group(function () {
    Route::get('user-projects', [ArtistProjectController::class, 'userProjects'])->name('projects.userProjects');
    Route::resource('projects', ArtistProjectController::class);
    Route::resource('partners', ArtistPartnerController::class);

});
