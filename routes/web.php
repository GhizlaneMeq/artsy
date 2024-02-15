<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\artist\PartnerController as ArtistPartnerController;
use App\Http\Controllers\artist\ProjectController as ArtistProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProjectController;
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

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/test', [UserController::class, 'test']);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin'], function () {

Route::resource('partners', PartnerController::class);
Route::resource('projects', ProjectController::class);
Route::resource('artists', ArtistController::class);
Route::resource('', AdminController::class);
Route::resource('users', UserController::class);
Route::resource('dashboard', AdminController::class);
Route::patch('projects/{project}/status', [ProjectController::class,'updateStatus'])->name('projects.updateStatus');



});





Route::group(['prefix' => 'artist', 'as' => 'artist.', 'namespace' => 'App\Http\Controllers\Artist'], function () {

    Route::get('user-projects', [ArtistProjectController::class, 'userProjects'])->name('projects.userProjects');
    Route::resource('projects', ArtistProjectController::class);
    Route::post('projects/update-status',[ ArtistProjectController::class,'updateStatus']);
    Route::post('/apply/{project_id}', [ArtistProjectController::class, 'apply'])->name('apply');
    Route::get('artist/created-projects', [ArtistProjectController::class, 'userCreatedProjects'])->name('projects.createdByUser');
    Route::resource('partners', ArtistPartnerController::class);

});
