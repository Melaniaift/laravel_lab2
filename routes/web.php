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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','DataController@index');
Route::get('/test1','DataController@test1');
Route::get('/test2','DataController@test2');
Route::get('/test3','DataController@test3');
Route::get('/test4','DataController@test4');
Route::get('/test5','DataController@test5');
