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

Route::get('test1','ardiController@template1');
Route::get('test2','ardiController@template2');
Route::get('test3','ardiController@template3');
Route::get('test4','ardiController@template4');
Route::get('test5','ardiController@template5');
Route::get('test6','ardiController@template6');


