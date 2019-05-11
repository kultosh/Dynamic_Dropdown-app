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


Route::get('/product','TestController@prodfunct');

Route::get('/findProductName','TestController@findProductName');

Route::get('/findPrice',"TestController@findPrice");

Route::get('/findAuthor',"TestController@findAuthor");

Route::get('/liquar','liquarController@subcatfunct');

Route::get('/findliquars','liquarController@findSubcatName');

Route::get('/findliquarsproduct','liquarController@findProductName');