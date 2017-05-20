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

/*Route::get('/', 'BasketController@index');
Route::post('/','BasketController@index');*/
Route::match(['get', 'post'],'/', 'BasketController@index');
//Route::post('/', 'BasketController@index2');


/*Route::get('/', function () {
    return view('welcome');
});
Route::get('index', 'BasketController@index');
*/