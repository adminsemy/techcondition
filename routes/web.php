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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customers', 'CustomerController@index')->name('customers.index');
Route::post('/customers/search', 'CustomerController@search')->name('customers.search');
Route::get('/customers/search', 'CustomerController@search')->name('customers.search');
Route::get('/customers/create', 'CustomerController@create')->name('customers.create');
Route::post('/customers/create', 'CustomerController@store')->name('customers.store');
Route::get('/customers/edit/{id}', 'CustomerController@edit')->name('customers.edit');
Route::post('/customers/edit/{id}', 'CustomerController@updateRecord')->name('customers.update');

Route::get('/tech-condition', 'TechConditionController@index')->name('techCondition.index');
Route::get('/tech-condition/search', 'TechConditionController@search')->name('techCondition.search');
Route::post('/tech-condition/search', 'TechConditionController@search')->name('techCondition.search');
Route::get('/tech-condition/edit/{id}', 'TechConditionController@edit')->name('techCondition.edit');
Route::post('/tech-condition/edit/{id}', 'TechConditionController@updateRecord')->name('techCondition.update');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
