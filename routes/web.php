<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->namespace('Admin')->namespace('admin.')->group(function(){
    Auth::routes();
});


Route::get('/condition/create/{id}', [App\Http\Controllers\ConditionController::class, 'create'])->name('condition.create');
Route::post('/condition/store', [App\Http\Controllers\ConditionController::class, 'store'])->name('condition.store');

Route::get('/search',[App\Http\Controllers\MyController::class, 'search']);
Route::get('/home',function () {
    return view('home');
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register1', [App\Http\Controllers\HomeController::class, 'register'])->name('register1');
Route::post('/user/store', [App\Http\Controllers\HomeController::class, 'store'])->name('users.store');
Route::get('/user/completed', [App\Http\Controllers\HomeController::class, 'completed'])->name('user.completed');
Route::get('/user/func/{id}', [App\Http\Controllers\HomeController::class, 'func'])->name('user.func');
Route::post('/condition/update', [App\Http\Controllers\HomeController::class, 'update'])->name('condition.update');
Route::get('/user/edit/{id}', [App\Http\Controllers\HomeController::class, 'user_edit'])->name('user.user_edit');
Route::post('/user/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('user.edit');
Route::post('/user/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('user.delete');
Route::post('/condition/delete/{id}', [App\Http\Controllers\ConditionController::class, 'delete'])->name('condition.delete');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class,'logout']);

Route::get('/registration/patien', [App\Http\Controllers\HomeController::class, 'store'])->name('registration.patient');
Route::get('/condition/patient_home', [App\Http\Controllers\HomeController::class, 'home'])->name('patient_home');


