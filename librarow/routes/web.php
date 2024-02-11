<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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
Route::get('/borrow/{id}',[bookController::class,'index'])->name('borrow');
Route::get('/profile',function(){return view('user.profile');})->name('profile');
Route::get('/profile/edit',function(){return view('user.edit_profile');})->name('profile-edit');

Route::prefix('admin')->group(function(){
    Route::get('/',[adminController::class,'index'])->name('admin');
    Route::get('/student',[adminController::class,'student_data'])->name('student-data');
    Route::get('/librarian',[adminController::class,'librarian_data'])->name('librarian-data');
    Route::get('/book',[adminController::class,'book_data'])->name('book-data');
    Route::get('/book/edit/{id}',[adminController::class,'book_edit'])->name('book-edit');
    Route::patch('/book/update/{id}',[adminController::class,'book_update'])->name('book-update');
    Route::delete('/book/delete/{id}',[adminController::class,'book_delete'])->name('book-delete');
});

// Route::middleware(['isLogin'])->group(function(){
//     Route::get('/login', [loginController::class,'index'])->name('login-page');
//     Route::post('/login', [loginController::class,'authenticate'])->name('login-auth');
//     Route::get('/login', [loginController::class,'register'])->name('register');
//     Route::post('/login', [loginController::class,'store'])->name('register-store');
// });
Route::get('/login', [loginController::class,'index'])->name('login-page');
Route::post('/login', [loginController::class,'authenticate'])->name('login-auth');
Route::post('/register', [loginController::class,'store'])->name('register');
Route::get('/logout',[loginController::class,'logout'])->name('logout');

Route::get('/test', [loginController::class,'index'])->name('test');