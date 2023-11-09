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

Route::get('/login',function(){return view('login');})->name('login');

Route::get('/categories',function(){return view('categories');})->name('categories');
Route::get('/categories/list',function(){return view('list');})->name('book-categories');
Route::get('/borrow',function(){return view('user.borrow_book');})->name('borrow');
Route::get('/profile',function(){return view('user.profile');})->name('profile');
Route::get('/profile/edit',function(){return view('user.edit_profile');})->name('profile-edit');

Route::get('/admin',function(){return view('admin.dashboard');})->name('admin');
Route::get('/data-mahasiswa',function(){return view('admin.data_mahasiswa');})->name('data-mahasiswa');
Route::get('/data-admin',function(){return view('admin.data_admin');})->name('data-admin');
Route::get('/data-buku',function(){return view('admin.data_buku');})->name('data-buku');

Route::get('/test', function(){
    return view('test');
});