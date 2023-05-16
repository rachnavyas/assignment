<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;

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

Route::get('/',[crudcontroller::class,'index'])->name('index');
Route::post('/',[crudcontroller::class,'create'])->name('create');
Route::get('/edit/{id}',[crudcontroller::class,'edit'])->name('edit');
Route::post('/edit/{id}',[crudcontroller::class,'update'])->name('update');
Route::get('/delete/{id}',[crudcontroller::class,'destroy'])->name('destroy');