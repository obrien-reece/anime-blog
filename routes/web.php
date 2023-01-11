<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AnimeCharacterController;
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

Auth::routes();

Route::get('/', 'App\Http\Controllers\BlogController@index');

Route::resource('/blog', 'App\Http\Controllers\BlogController', ['except' => ['show']]);

//Route::resource('/blog', BlogController::class);

Route::get('/blog/{anime}', [BlogController::class, 'show']);

Route::resource('/character', AnimeCharacterController::class);


//Route::get('/home', [App\Http\Controllers\BlogController::class, 'index'])->name('home');
