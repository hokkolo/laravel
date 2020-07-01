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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','PortController@index');
Route::get('/bio','PortController@bio');
Route::get('/projects','PortController@projects');
Route::get('/contactme','PortController@contactme');
Route::get('/login','PortController@login');
Route::view('register','register');
Route::post('register','PortController@register');