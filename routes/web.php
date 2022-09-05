<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\PostController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/created-post', [\App\Http\Controllers\PostController::class, 'create'])->name('created-post');
Route::get('/store-post', [\App\Http\Controllers\PostController::class, 'store'])->name('store-post');

require __DIR__.'/auth.php';
