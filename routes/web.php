<?php

use App\Http\Controllers\CategoriesAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Persons;
use App\Http\Controllers\Categories;
use App\Http\Controllers\Main;
use App\Http\Controllers\Comments;

Route::get('/', [Main::class, 'index'])->name('welcom');


Route::prefix('/comments')->controller(Comments::class)->group(function () {
    Route::get('/', 'index')->name('comment.index');
    Route::put('/{id}/update', 'update')->name('comment.update');
    Route::delete('/{id}','destroy')->name('comment.destroy');
});

Route::post('/posts/{id}', [Comments::class, 'store'])->name('comment.store');

Route::prefix('/posts')->controller(Posts::class)->group(function () {
    Route::get('/', 'index')->name('post.index');
    Route::get('/create', 'create')->name('post.create');
    Route::get('/{id}', 'show')->name('post.show');
    Route::post('/', 'store')->name('post.store');
    Route::get('/{id}/edit', 'edit')->name('post.edit');
    Route::put('/{id}/update', 'update')->name('post.update');
    Route::delete('/{id}', 'destroy')->name('post.destroy');
});

//Route::resource('categories', PostsController::class)->parameters(['posts' => 'id']);  the same!!!!
//universal route! create all paths
Route::prefix('/categories')->controller(Categories::class)->group(function () {
    Route::get('/', 'index')->name('category.index');
    Route::get('/create', 'create')->name('category.create');
    Route::get('/{id}', 'show')->name('category.show');
    Route::post('/', 'store')->name('category.store');
    Route::get('/{id}/edit', 'edit')->name('category.edit');
    Route::put('/{id}', 'update')->name('category.update');
    Route::delete('/{id}', 'destroy')->name('category.destroy');
});

Route::prefix('/catadmin')->controller(CategoriesAdmin::class)->group(function () {
    Route::get('/', 'index')->name('catadmin.index');
    Route::get('/trash', 'trashlist')->name('catadmin.trash');
    Route::put('/{category}/restore', 'restore')->whereNumber(['category'])->name('catadmin.restore');
    Route::delete('/{category}/destroy', 'destroy')->whereNumber(['category'])->name('catadmin.destroy');
    Route::get('/{slug}', 'show')->name('catadmin.show');
});
