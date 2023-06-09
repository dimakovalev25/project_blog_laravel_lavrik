<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Persons;
use App\Http\Controllers\Categories;

Route::get('/persons', [Persons::class, 'index']);

Route::get('/posts', [Posts::class, 'index'])->name('post.index');
Route::get('/posts/create', [Posts::class, 'create'])->name('post.create');
Route::get('/posts/{id}', [Posts::class, 'show'])->name('post.show');
Route::post('/posts', [Posts::class, 'store'])->name('post.store');

//Route::get('/categories', [Categories::class, 'index']);
//Route::get('/categories/create', [Categories::class, 'create']);
//Route::get('/categories/{id}', [Categories::class, 'show']);
//Route::post('/categories', [Categories::class, 'store']);
//Route::get('/categories/{id}/edit', [Categories::class, 'edit']);
//Route::put('/categories/{id}', [Categories::class, 'update']);
//Route::delete('/categories/{id}', [Categories::class, 'destroy']);

Route::resource('categories', Categories::class);

//Route::prefix('/categories')->controller(Categories::class)->group(function (){
//    Route::get('/', 'index')->name('categories.index');
//    Route::get('/create', 'create')->name('categories.create');
//    Route::get('/{id}', 'show')->name('categories.show');
//    Route::post('/', 'store')->name('categories.store');
//    Route::get('/{id}/edit', 'edit')->name('categories.edit');
//    Route::put('/{id}', 'update')->name('categories.update');
//    Route::delete('/{id}', 'destroy')->name('categories.destroy');
//});
