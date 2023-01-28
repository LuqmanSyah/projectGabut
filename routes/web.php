<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('posts', [PageController::class, 'posts'])->name('posts');

Route::get('login', [PageController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [PageController::class, 'register'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('profile', [PageController::class, 'profile'])->name('profile')->middleware('auth');

Route::prefix('post')->middleware('auth')->name('post.')->group(function() {
    Route::get('/', [PageController::class, 'post'])->name('index');
    Route::post('store', [PostController::class, 'store'])->name('store');
});
Route::get('show/{slug}', [PageController::class, 'show'])->name('show');
