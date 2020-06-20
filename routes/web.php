<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ApiController@indexAction');
Route::get('/kategorii', 'ApiController@kategoriiAction');
Route::get('/kontakti', 'ApiController@kontaktiAction');
Route::get('/korzina', 'ApiController@korzinaAction');
Route::get('/opla4eno', 'ApiController@opla4enoAction');
Route::get('/stati', 'ApiController@statiAction');
Route::get('/tovar1', 'ApiController@tovar1Action');
Route::get('/tovar2', 'ApiController@tovar2Action');
Route::get('/tovar3', 'ApiController@tovar3Action');
Route::get('/tovar4', 'ApiController@tovar4Action');