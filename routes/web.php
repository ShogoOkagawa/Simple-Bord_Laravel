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

Route::resource('posts', 'PostController');

// if (env('APP_ENV') === 'local') {
//    URL::forceScheme('https');
// }

// Route::get('/posts', 'PostController@index')->name('index');
// Route::get('/posts/create', 'PostController@create')->name('create');
// Route::post('/posts', 'PostController@store')->name('store');
// Route::get('/posts/{id}', 'PostController@show')->name('show');
// Route::get('/posts/{id}/edit', 'PostController@edit')->name('edit');
// Route::put('/update/{id}', 'PostController@update')->name('update');
// Route::delete('/delete/{id}', 'PostController@delete')->name('delete');