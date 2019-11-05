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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('main');
});

Route::get('/input','InputController@index');
Route::get('/input/tambah','InputController@tambah');
Route::post('/input/store','InputController@store');
Route::get('/input/edit/{id}','InputController@edit');
Route::get('/input/hapus/{id}','InputController@hapus');

Route::get('/category',function(){
    return view('category');
});
Route::get('/category/list/detail/{id}','InputController@detail');

Route::get('/category/list',function(){
    return view('list');
});
Route::get('/detail', function(){
     return view('detail');
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
