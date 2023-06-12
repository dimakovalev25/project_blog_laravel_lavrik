<?php

use App\Http\Controllers\CategoriesAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Persons;
use App\Http\Controllers\Categories;
use App\Http\Controllers\Main;

Route::get('/', [Main::class, 'index'])->name('welcom');

Route::get('/persons', [Persons::class, 'index'])->name('persons.index');

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

//Route::resource('categories', Categories::class)->name('categories.index');

Route::prefix('/categories')->controller(Categories::class)->group(function (){
    Route::get('/', 'index')->name('category.index');
    Route::get('/create', 'create')->name('category.create');
    Route::get('/{id}', 'show')->name('category.show');
    Route::post('/', 'store')->name('category.store');
    Route::get('/{id}/edit', 'edit')->name('category.edit');
    Route::put('/{id}', 'update')->name('category.update');
    Route::delete('/{id}', 'destroy')->name('category.destroy');
});

Route::prefix('/catadmin')->controller(CategoriesAdmin::class)->group(function (){
    Route::get('/', 'index')->name('catadmin.index');
    Route::get('/trash', 'trashlist')->name('catadmin.trash');
    Route::put('/{category}/restore', 'restore')->whereNumber(['category'])->name('catadmin.restore');
    Route::delete('/{category}/destroy', 'destroy')->whereNumber(['category'])->name('catadmin.destroy');
    Route::get('/{slug}', 'show')->name('catadmin.show');
});
