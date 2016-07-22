<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





Route::auth();

Route::get('/home', 'HomeController@index')->name('login');
Route::get('/', 'PagesController@index')->name('myBlog');
Route::get('new-article', 'PagesController@newArticle')->name('newArticle');
Route::get('my-articles', 'PagesController@myArticles')->name('myArticles');
Route::get('search-result', 'PagesController@searchByAuthor')->name('searchByAuthor');
Route::resource('posts', 'PostController');
Route::get('/posts/{postId}/delete', 'PostController@delete')->name('posts.delete');
Route::get('/posts/{postId}/edit', 'PostController@edit')->name('blog.edit');
Route::get('/side-menu', 'PagesController@sideMenu');

Route::get('/breaking-news', 'PagesController@breakingNews')->name('breaking-news');
Route::get('/cars-and-vehicles', 'PagesController@carsAndVehicles')->name('carsAndVehicles');

