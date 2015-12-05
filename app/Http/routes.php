<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'BlogController@index']);

Route::get('test1','HomeController@test1');
Route::get('test2','HC2@test2');
Route::get('child','HomeController3@child');
Route::post('formtest','HomeControllerl@formtest');
Route::get('contact',   ['as' => 'contact', 'uses' => 'AboutController@contact']);
Route::post('contact1',  ['as' => 'contact_store', 'uses' => 'AboutController@contact']);
Route::get('login',   ['as' => 'login', 'uses' => 'LoginController@login']);
Route::post('login1',  ['as' => 'Login_store', 'uses' => 'LoginController@index']);
Route::get('login',   ['as' => 'login', 'uses' => 'LoginController@login']);
Route::post('login1',  ['as' => 'Login_store', 'uses' => 'LoginController@index']);
Route::get('contactvalid',   ['as' => 'contactvalid', 'uses' => 'ContactvController@index']);
Route::post('contactvalid1',  ['as' => 'contact_store', 'uses' => 'ContactvController@index']);
Route::get('contactinsert',   ['as' => 'contactinsert', 'uses' => 'ContactControllerI@index']);
Route::post('contactinsert1',  ['as' => 'contact_store1', 'uses' => 'ContactControllerI@index']);
Route::get('contactupdate',   ['as' => 'contactupdate', 'uses' => 'ContactControllerU@index']);
Route::post('contactupdate1',  ['as' => 'contact_store2', 'uses' => 'ContactControllerU@index']);

Route::get('create',   ['as' => 'create', 'uses' => 'BlogController@create']);
Route::post('save',  ['as' => 'save', 'uses' => 'BlogController@save']);
