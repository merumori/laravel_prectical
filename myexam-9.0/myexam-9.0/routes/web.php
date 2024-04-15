<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/',[StudentController::class,'index'])->name('index');
Route::get('/create',[StudentController::class,'create'])->name('create');
Route::post('/store',[StudentController::class,'store'])->name('store');
Route::get('/index/{id}',[StudentController::class,'show'])->name('show');

Route::delete('/index/{id}',[StudentController::class,'destroy'])->whereNumber('id')->name('destroy');
Route::post('/index/{id}',[StudentController::class,'edit'])->whereNumber('id')->name('edit');
Route::put('/index/{id}',[StudentController::class,'update'])->whereNumber('id')->name('update');

