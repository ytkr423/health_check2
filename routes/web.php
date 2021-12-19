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
/*
Route::get('/',function () {
    return view('home');
});
*/
Route::get('/',[App\Http\Controllers\MyController::class, 'index']);


Route::get('/update/{id}', [App\Http\Controllers\UpdateController::class, 'update']);

Auth::routes();


Route::get('/condition/create/{id}', [App\Http\Controllers\ConditionController::class, 'create'])->name('condition.create');
Route::post('/condition/store', [App\Http\Controllers\ConditionController::class, 'store'])->name('condition.store');

Route::get('/search',[App\Http\Controllers\MyController::class, 'search']);
Route::get('/home',function () {
    return view('home');
});
