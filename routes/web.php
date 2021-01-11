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

Route::get('/reports', 'PrintController@html')->name("html");

Route::get('/pdf', 'PrintController@pdf')->name("pdf");

Route::get('/test', 'PrintController@test');

Route::get('/number', 'PrintController@number_to_text');
