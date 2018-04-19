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


Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('about', 'AboutController@index')->name('about');

Route::get('news', 'NewsController@index')->name('news');
Route::get('news/{id}', 'NewsController@show')->name('news.show')->where('id', '[0-9]+');
Route::get('news/create', 'NewsController@create')->name('news.create');
Route::post('news/store', 'NewsController@store')->name('news.store');

Route::get('interviews', 'InterviewsController@index')->name('interviews');
Route::get('interviews/{id}', 'InterviewsController@show')->name('interviews.show')->where('id', '[0-9]+');
Route::get('interviews/create', 'InterviewsController@create')->name('interviews.create');
Route::post('interviews/store', 'InterviewsController@store')->name('interviews.store');



//forum routes
Route::get('forum', 'ForumController@index')->name('forum');
Route::get('forum/{id}','ForumController@show')->name('forum.show')->where('id', '[0-9]+');
Route::get('forum/create', 'ForumController@create')->name('forum.create');

Route::post('forum/store', 'ForumController@store')->name('forum.store');
Route::post('forum/commentStore', 'ForumController@commentStore')->name('forum.commentStore');

Route::get('user', 'UserController@index')->name('user');
Route::get('user/{id}', 'UserController@show')->name('user.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
