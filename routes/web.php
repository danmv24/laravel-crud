<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('index');

Route::prefix('posts')->group(function() {
    Route::get('/read/{postId}', [PostController::class, 'readPost'])->name('read');
    Route::get('/create', [PostController::class, 'getCreate'])->name('create');
    Route::post('/create', [PostController::class, 'createPost'])->name('create');
    Route::get('/update/{postId}', [PostController::class, 'getUpdate'])->name('updatePage');
    Route::patch('/edit/{postId}', [PostController::class, 'updatePost'])->name('updatePost');
    Route::get('/delete/{postId}', [PostController::class, 'deletePost'])->name('delete');
});
