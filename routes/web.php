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

//Route::resource('post', 'PostController');
//Route::get('post/delete/{id}','PostController@destroy');
// get list of posts
Route::get('post','postController@index');
// get specific post
Route::get('post/{id}','postController@show');
// delete a post
Route::delete('post/{id}','postController@destroy');
// update existing post
Route::patch('post/{id}','postController@update');
// create new post
Route::post('post','postController@store');
//- See more at: https://arjunphp.com/create-rest-laravel-framework/#sthash.fnaT2J4B.dpuf
//Route::post('/post/update','PostController@update');
