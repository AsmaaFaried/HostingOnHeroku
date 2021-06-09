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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'workspace'],function(){
    Route::get('/profile','WorkProfile\ProfileController@create');
    Route::post('/profile','WorkProfile\ProfileController@store')->name('workprofile');
   
});

Route::get('/addRoom','WorkProfile\AddRoomController@create');
Route::post('/addRoom','WorkProfile\AddRoomController@store')->name('addroom');
Route::get('/Rooms','WorkProfile\AddRoomController@display')->name('showroom');
Route::get('/editimage/{id}','WorkProfile\AddRoomController@edit');
Route::put('/updateimage/{id}','WorkProfile\AddRoomController@update')->name('update');
Route::get('/deleteimage/{id}','WorkProfile\AddRoomController@delete');
