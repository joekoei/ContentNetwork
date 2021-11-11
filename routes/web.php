<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [MainController::class,'index'])->name('index');

Route::redirect('/login','index');

Route::get('/dashboard', [MainController::class,'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/todo', [MainController::class,'todo'])->middleware(['auth'])->name('todo');

Route::get('/media',[MainController::class,'media'])->middleware(['auth'])->name('media');

Route::get('/v1',[MainController::class,'admin'])->middleware(['auth'])->name('admin');

Route::get('/v1/stats',[MainController::class,'stats'])->middleware(['auth'])->name('admin.stats');

Route::get('/v1/users',[MainController::class,'adminUsers'])->middleware(['auth'])->name('admin.users');

Route::get('/profile',[ProfileController::class, 'index'])->middleware(['auth'])->name('profile.show');
require __DIR__.'/auth.php';
