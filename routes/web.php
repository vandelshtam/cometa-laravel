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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\PostController::class, 'index'])->middleware(['auth'])->name('dashboard');
    //Route::get('/dashboard', [\App\Http\Controllers\PostController::class, 'index'])->name('dashboard')->middleware('can:show posts');

    Route::get('/created-post', [\App\Http\Controllers\PostController::class, 'create'])->name('created-post')->middleware('can:add posts');
    Route::get('/edit-post/{id}', [\App\Http\Controllers\PostController::class, 'edit'])->name('edit-post')->middleware('can:edit posts');
    Route::put('/update-post/{id}', [\App\Http\Controllers\PostController::class, 'update'])->name('update-post')->middleware('can:edit posts');
    Route::delete('/delete-post/{id}', [\App\Http\Controllers\PostController::class, 'delete'])->name('delete-post')->middleware('can:delete posts');
    Route::post('/store-post', [\App\Http\Controllers\PostController::class, 'store'])->name('store-post')->middleware('can:add posts');

    //Route::resource('/roles', \App\Http\Controllers\RoleController::class)->middleware('role:super-user');
    Route::resource('/roles', \App\Http\Controllers\RoleController::class);
    Route::resource('/users', \App\Http\Controllers\UserController::class);
});
    


require __DIR__.'/auth.php';
