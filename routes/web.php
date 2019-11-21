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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/create', 'BlogController@create');
Route::post('/blog', 'BlogController@store');
Route::get('/blog/trash', 'BlogController@trash');

Route::get('/blog/{id}/edit', 'BlogController@edit');
Route::put('/blog/{id}', 'BlogController@update');

Route::get('/blog/{id}', 'BlogController@show');


Route::delete('/blog/{id}/delete', 'BlogController@delete');
Route::delete('/blog/{id}/force_delete', 'BlogController@forceDelete');

Route::post('/blog/{id}/restore', 'BlogController@restore');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
