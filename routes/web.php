<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use App\Http\Controllers\PhimController;
use App\Http\Controllers\EpisodeController;
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
Route::get('/movie/{id}', [App\Http\Controllers\Index::class, 'movie'])->name('movie');
Route::get('/xem-phim/{id}', [App\Http\Controllers\Index::class, 'watch'])->name('watch');
Route::get('/episode', [App\Http\Controllers\Index::class, 'episode'])->name('episode');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin
Route::resource('/phim', PhimController::class);
Route::resource('/episode' , EpisodeController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/genre', GenreController::class);
Route::resource('/nation', NationController::class);

Auth::routes();


