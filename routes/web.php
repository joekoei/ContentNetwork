<?php

use App\Http\Controllers\MainController;
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

require __DIR__.'/auth.php';
