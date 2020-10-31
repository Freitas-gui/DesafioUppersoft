<?php

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


Route::group(['middleware' => 'web'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->middleware('auth');
Route::get('/users/new', [App\Http\Controllers\UsersController::class, 'new'])->middleware('auth');
Route::post('/users/add', [App\Http\Controllers\UsersController::class, 'add'])->middleware('auth');

