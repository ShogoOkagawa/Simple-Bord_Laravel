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

// Route::resouce('posts','PostController');

// AW9での開発の場合　HTTP接続でアセットを読み込みための処理
// if (env('APP_ENV') === 'local') {
//     URL::forceScheme('https');
// }