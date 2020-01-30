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
Auth::routes([
   'reset' => false,
   'verify' => false,
   'register' => false,
    ]);

Route::get('/', 'UserController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reset-password', 'UserController@resetPassword');
Route::get('/create-user', 'UserController@createUser');
Route::get('/customers', 'CustomerController@index')->name('customers.index');
Route::post('/customers/search', 'CustomerController@search')->name('customers.search');
Route::get('/customers/search', 'CustomerController@search')->name('customers.search');
Route::get('/customers/create', 'CustomerController@create')->name('customers.create');
Route::post('/customers/create', 'CustomerController@store')->name('customers.store');
Route::get('/customers/{id}', 'CustomerController@edit')->name('customers.edit');
Route::post('/customers/{id}', 'CustomerController@updateRecord')->name('customers.update');

Route::get('/tech-condition', 'TechConditionController@index')->name('tehCondition.index');

