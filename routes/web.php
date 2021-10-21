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

use App\Http\Middleware\HelloMiddleware;

Route::get('/', function () {
    return view('welcome');
});


//Getでアクセスしたときのルート
Route::get('hello','HelloContoller@index')
->middleware(HelloMiddleware::class);

//Postでアクセスしたときのルート
Route::post('hello','HelloContoller@post');


Route::get('hello/add','HelloContoller@add');

Route::post('hello/add','HelloContoller@create');

Route::get('hello/edit','HelloContoller@edit');

Route::post('hello/edit','HelloContoller@update');

Route::get('hello/show','HelloContoller@show');

Route::get('person','PersonController@index');

Route::get('person/find','PersonController@find');
Route::post('person/find','PersonController@search');

Route::get('person/add','PersonController@add');
Route::post('person/add','PersonController@create');

Route::get('person/edit','PersonController@edit');
Route::post('person/edit','PersonController@update');

Route::get('person/del','PersonController@delete');
Route::post('person/del','PersonController@remove');

Route::get('board','BoardController@index');

Route::get('board/add','BoardController@add');
Route::post('board/add','BoardController@clreate');

Route::resource('rest','RestappController');
