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
    return view('HealthCheck.health_update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/update', [App\Http\Controllers\UpdateController::class, 'store'])->name('update');
Route::get('/condition/create', [App\Http\Controllers\ConditionController::class, 'create'])->name('condition.create');
Route::post('/condition/store', [App\Http\Controllers\ConditionController::class, 'store'])->name('condition.store');
