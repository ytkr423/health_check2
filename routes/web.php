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

Route::group(['niddleware' => 'owner_auth'],function(){

    Route::get('/owner/home','Owner\HomeController@index');

});

Route::get('/', function () {
    return view('welcome!!');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register1', [App\Http\Controllers\HomeController::class, 'register'])->name('register1');
Route::post('/user/store', [App\Http\Controllers\HomeController::class, 'store'])->name('users.store');
Route::get('/user/completed', [App\Http\Controllers\HomeController::class, 'completed'])->name('user.completed');
Route::get('/user/func/{id}', [App\Http\Controllers\HomeController::class, 'func'])->name('user.func');
Route::post('/condition/update', [App\Http\Controllers\HomeController::class, 'update'])->name('condition.update');
Route::get('/user/edit/{id}', [App\Http\Controllers\HomeController::class, 'user_edit'])->name('user.user_edit');
Route::post('/user/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('user.edit');