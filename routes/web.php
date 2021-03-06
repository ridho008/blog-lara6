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
Route::get('/', 'BlogController@index');
Route::get('/content/{slug}', 'BlogController@content')->name('blog.content');
Route::get('/list-posts', 'BlogController@listBlog')->name('blog.list');
Route::post('/reply/submitMessage', 'ReplyController@submitMessage')->name('reply.massage');
Route::get('/category/{categori}', 'BlogController@listCategory')->name('blog.category');
Route::get('/tags/{tags}', 'BlogController@tags')->name('blog.tags');
Route::get('/search', 'BlogController@search')->name('blog.search');
Route::get('/about', 'BlogController@about')->name('blog.about');
// Route::get('/archive/post?{month=}&{year=}', 'BlogController@archive')->name('archive.post');

// Route::view('/home', 'home');

Route::group(['middleware' => 'auth'], function() {
   Route::get('/home', 'HomeController@index')->name('home');
   Route::resource('/categori', 'CategoriController');
   Route::resource('/user', 'UserController');
   Route::resource('/tag', 'TagController');
   Route::get('/post/trashPost', 'PostController@trashPosts')->name('post.trash-post');
   Route::get('/post/{id}/restorePost', 'PostController@restorePost')->name('post.restore-post');
   Route::delete('/post/{id}/deleteAny', 'PostController@deleteAny')->name('post.delete-any');
   Route::resource('/post', 'PostController');
   Route::get('/fileManager', 'PostController@fileManager')->name('post.file-manager');

   // Controller Settings
   Route::get('/settings', 'SettingController@index')->name('settings.index');
   Route::put('/settings/{id}', 'SettingController@updateGeneral')->name('setting.update-general');
   Route::put('/settings/{id}/socialMedia', 'SettingController@socialMedia')->name('setting.social-media');
   Route::put('/settings/{id}/contactUs', 'SettingController@contactUs')->name('setting.contact-us');
   Route::put('/settings/{id}/aboutUs', 'SettingController@aboutUs')->name('setting.about-us');
   Route::put('/settings/{id}/metaData', 'SettingController@metaData')->name('setting.meta-data');

});

 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });





