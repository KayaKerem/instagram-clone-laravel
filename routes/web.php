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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('follow/{user}','App\Http\Controllers\FollowersController@store');


Route::get('/p/create','App\Http\Controllers\PostsController@create');
Route::post('/p','App\Http\Controllers\PostsController@store');
Route::get('/p/{post}','App\Http\Controllers\PostsController@show');


Route::get('/profile/{user}', [App\Http\Controllers\UserController::class, 'index'])->name('user.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
