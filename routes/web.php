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

// Metode prefix
Route::group(['prefix' => 'blog'], function(){
    // Pemberian nama alias pada route
    // Route::match(['get', 'post'], 'blog/testing', 'BlogController@testing')->name('test');
    Route::match(['get', 'post'], '/testing', 'BlogController@testing');

    Route::get('/test_page', 'BlogController@test_page');

    Route::get('/', 'BlogController@index');
    Route::get('/create', 'BlogController@create');
    Route::post('/', 'BlogController@store');
    Route::get('/trash', 'BlogController@trash');

    Route::get('/{id}/edit', 'BlogController@edit');
    Route::put('/{id}', 'BlogController@update');

    Route::get('/{id}', 'BlogController@show');


    Route::delete('/{id}/delete', 'BlogController@delete');
    Route::delete('/{id}/force_delete', 'BlogController@forceDelete');

    Route::post('/{id}/restore', 'BlogController@restore');
});

