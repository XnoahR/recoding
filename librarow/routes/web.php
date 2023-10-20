<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
});
Route::get('/categories',function(){return view('categories');})->name('categories');
Route::get('/borrow',function(){return view('user.borrow_book');})->name('borrow');
Route::get('/profile',function(){return view('user.profile');})->name('profile');