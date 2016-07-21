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




Route::get('/', 'PagesController@index')->name('myBlog');
Route::get('new-article', 'PagesController@newArticle')->name('newArticle');
Route::get('my-articles', 'PagesController@myArticles')->name('myArticles');
Route::resource('posts', 'PostController');

Route::auth();

Route::get('/home', 'HomeController@index')->name('login');


Route::get('/side-menu', 'PagesController@sideMenu');

