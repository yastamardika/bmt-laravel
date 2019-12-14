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

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('main');
// });
Route::get('/', 'FrontController@utama')->name('sudahmasuk');


Route::get('/category', 'FrontController@category');
Route::get('/addyourtalent', function () {
    return view('pages.addTalent');
});
Route::post('/addyourtalent/store', 'MemberController@store');
Route::get('/category/list/detail/{id}', 'FrontController@detail');

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/category/{id}', 'FrontController@listCategory');
Route::get('/detail', function () {
    return view('detail');
});

Auth::routes();
Route::group(['middleware' => ['web','auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/input', 'InputController@index');
    Route::get('/input/tambah', 'InputController@tambah');
    Route::post('/input/store', 'InputController@store');
    Route::get('/input/edit/{id}', 'InputController@edit');
    Route::post('/input/edit/update', 'InputController@updatedata');
    Route::get('/input/hapus/{id}', 'InputController@hapus');
    Route::get('/logout', 'HomeController@logout')->name('logout');
});
