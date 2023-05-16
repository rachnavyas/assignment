<?php
use App\Http\Controllers\module7controller;
use Illuminate\Support\Facades\Route;

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
Route::get('/',[module7controller::class,'index'])->name('home');
Route::get('/login',[module7controller::class,'login'])->name('login');
Route::get('/register',[module7controller::class,'register'])->name('register');
Route::get('/aboutus',[module7controller::class,'view_aboutus'])->name('aboutus');
Route::get('/contactus',[module7controller::class,'view_contactus'])->name('contactus');

