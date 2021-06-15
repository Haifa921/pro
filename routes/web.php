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
Auth::routes();

Route::get('/',  [App\Http\Controllers\PostController::class, 'index2'])->name('posts1');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');

//Route::get('/posts', 'PostController@index' )->name('posts');
Route::get('/posts/trashed', [App\Http\Controllers\PostController::class, 'postsTrashed'])->name('posts.trashed');
//Route::get('/posts/trashed', 'PostController@postsTrashed' )->name('posts.trashed');
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
//Route::get('/post/create', 'PostController@create' )->name('post.create');
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
//Route::post('/post/store', 'PostController@store' )->name('post.store');
Route::get('/post/show/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
//Route::get('/post/show/{slug}', 'PostController@show' )->name('post.show');
Route::get('/post/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
//Route::get('/post/edit/{id}', 'PostController@edit' )->name('post.edit');
Route::post('/post/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
//Route::post('/post/update/{id}', 'PostController@update' )->name('post.update');
Route::get('/post/destroy/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
//Route::get('/post/destroy/{id}', 'PostController@destroy' )->name('post.destroy');
Route::get('/post/hdelete/{id}', [App\Http\Controllers\PostController::class, 'hdelete'])->name('post.hdelete');
Route::get('/post/restore/{id}', [App\Http\Controllers\PostController::class, 'restore'])->name('post.restore');

Route::get('/contact', [App\Http\Controllers\PostController::class, 'search']);
Route::get('/staff', [App\Http\Controllers\PostController::class, 'search1']);
Route::get('/search', [App\Http\Controllers\PostController::class, 'search2']);
Route::get('/arab', [App\Http\Controllers\PostController::class, 'arab']);