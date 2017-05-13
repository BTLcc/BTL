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
    return view('welcome.welcome');
});

Route::get('shop', 'ShopController@shop');

Route::get('admin', 'PagesController@admin');

Route::group(['prefix' => 'admin'], function()
{
  Route::get('login', 'UserController@getAdminLogin');

  Route::get('logout', 'UserController@getAdminLogout');

  Route::post('login', 'UserController@postAdminLogin');

  Route::get('dashboard', 'PagesController@dashboard');

  Route::group(['prefix' => 'category'], function()
  {

    Route::get('insert', 'CategoryController@getInsert');
    Route::post('insert','CategoryController@postInsert');

    Route::get('list', 'CategoryController@getList');

    Route::get('update/{id}', 'CategoryController@getUpdate');
    Route::post('update/{id}','CategoryController@postUpdate');

    Route::get('delete/{id}', 'CategoryController@getDelete');
  });

  Route::group(['prefix' => 'book'], function()
  {
    Route::get('insert', 'BookController@getInsert');
    Route::post('insert','BookController@postInsert');

    Route::get('list', 'BookController@getList');

    Route::get('update/{id}', 'BookController@getUpdate');
    Route::post('update/{id}','BookController@postUpdate');

    Route::get('delete/{id}', 'BookController@getDelete');
  });

  Route::group(['prefix' => 'user'], function()
  {
    Route::get('insert', 'UserController@getInsert');
    Route::post('insert','UserController@postInsert');

    Route::get('list', 'UserController@getList');

    Route::get('update/{id}', 'UserController@getUpdate');
    Route::post('update/{id}','UserController@postUpdate');

    Route::get('delete/{id}', 'UserController@getDelete');
  });
});
