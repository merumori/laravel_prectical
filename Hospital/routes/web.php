<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HospitalController;
Route::get('/', function () {
    return view('templeat/layout');
});
Route::get('/',[HospitalController::class,'index'])->name('index');
Route::get('/about',[HospitalController::class,'about'])->name('about');
Route::get('/contact',[HospitalController::class,'contact'])->name('contact');
Route::get('/create',[HospitalController::class,'create'])->name('create');
Route::post('/index',[HospitalController::class,'store'])->name('store');
Route::get('/index/{id}',[HospitalController::class,'show'])->name('show');

Route::delete('/index/{id}', [HospitalController::class, 'destroy'])->whereNumber('id')->name('destroy');

Route::post('/index/{id}/edit', [HospitalController::class, 'edit'])->whereNumber('id')->name('edit');

Route::put('/index/{id}', [HospitalController::class, 'update'])->whereNumber('id')->name('update');
