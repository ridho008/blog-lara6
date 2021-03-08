<?php

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
Route::get('/', function () {
    return view('welcome');
});

// Route::view('/home', 'home');

Route::group(['middleware' => 'auth'], function() {
   Route::get('/home', 'HomeController@index')->name('home');
   Route::resource('/categori', 'CategoriController');
   Route::resource('/tag', 'TagController');
   Route::get('/post/trashPost', 'PostController@trashPosts')->name('post.trash-post');
   Route::get('/post/{id}/restorePost', 'PostController@restorePost')->name('post.restore-post');
   Route::delete('/post/{id}/deleteAny', 'PostController@deleteAny')->name('post.delete-any');
   Route::resource('/post', 'PostController');
});



