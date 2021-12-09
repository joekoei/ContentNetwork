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

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'],function (){
    Route::get('/todo', [MainController::class,'todo'])->middleware(['auth'])->name('todo');
    Route::get('/media',[MainController::class,'media'])->middleware(['auth'])->name('media');
});

Route::group(['prefix' => 'v1', "middleware" => "auth"], function (){
    Route::get('/main',[MainController::class,'admin'])->middleware(['auth'])->name('admin');
    Route::get('/stats',[MainController::class,'stats'])->middleware(['auth'])->name('admin.stats');
    Route::get('/users',[MainController::class,'adminUsers'])->middleware(['auth'])->name('admin.users');
});

Route::get('/profile',[ProfileController::class, 'index'])->middleware(['auth'])->name('profile.show');
Route::post('/profile',[ProfileController::class,'updateProfile'])->middleware(['auth'])->name('profile.update');

require __DIR__.'/auth.php';
