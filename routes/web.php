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


// ログイン
Route::get('/login', 'AuthController@login');
// 新規登録
Route::get('/signup', 'AuthController@signup');

// 予定表
Route::get('/', 'ReserveController@schedule');
