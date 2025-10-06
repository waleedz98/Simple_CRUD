<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'index'])->name('posts');

// Route::resource('posts',PostController::class);

Route::get('posts', [PostController::class,'index'])->name('posts');
Route::get('posts/create', [PostController::class,'create'])->name('posts.create');
Route::post('posts/store', [PostController::class,'store'])->name('posts.store');
Route::put('posts/update/{id}', [PostController::class,'update'])->name('posts.update');
Route::get('posts/edit/{id}', [PostController::class,'edit'])->name('posts.edit');
Route::delete('posts/destroy/{id}', [PostController::class,'destroy'])->name('posts.destroy');

Route::get('posts/showdelete', [PostController::class,'show'])->name('posts.showdelete');
Route::get('posts/show/{id}', [PostController::class,'showpost'])->name('posts.show');