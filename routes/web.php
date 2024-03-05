<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\PhimController;
use App\Http\Controllers\NguoiDungController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userpageController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NationController;
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

Route::get('/', [App\Http\Controllers\Index::class, 'home'])->name('homepage');
Route::get('/danhmuc', [App\Http\Controllers\Index::class, 'danhmuc'])->name('danhmuc');
Route::get('/theloai', [App\Http\Controllers\Index::class, 'theloai'])->name('theloai');
Route::get('/quocgia', [App\Http\Controllers\Index::class, 'quocgia'])->name('quocgia');
Route::get('/phim', [App\Http\Controllers\Index::class, 'phim'])->name('phim');  
Route::get('/xemphim', [App\Http\Controllers\Index::class, 'xemphim'])->name('xemphim');
Route::get('/tapphim', [App\Http\Controllers\Index::class, 'tapphim'])->name('tapphim');
Route::get('/profilepage', [App\Http\Controllers\ProfileController::class, 'index'])->name('profilepage');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin
Route::resource('/phim', PhimController::class);
Route::resource('/nguoidung' , NguoiDungController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/genre', GenreController::class);
Route::resource('/nation', NationController::class);

Auth::routes();


