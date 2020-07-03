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

Route::get('/', 'FrontController@index');
Route::get('/company', 'UploadController@upload');
Route::get('/formcompany', 'UploadController@formupload');
Route::post('/company/proses', 'UploadController@proses_upload');
Route::get('/pics', 'FrontController@pics');