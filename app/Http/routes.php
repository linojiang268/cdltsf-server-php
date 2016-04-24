<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['prefix' => 'brands'], function () {
    /*  '/qianyu' (default) '/chuanfuxue' '/maixia' */
    Route::get('/{brand?}', 'BrandController@index');
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/{id}', 'ProductController@product');
    Route::get('/{brand}/list', 'ProductController@productList');
});

Route::group(['prefix' => 'join'], function () {
    Route::get('/', 'JoinController@index');
    Route::get('/recruit', 'JoinController@recruit');
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/{nav}', 'NewsController@newsListView');
    Route::get('/{nav}/list', 'NewsController@newsList');
    Route::get('/{nav}/{id}', 'NewsController@news');
});

Route::group(['prefix' => 'affiliate'], function () {
    Route::get('/', 'AffiliateController@claim');
    Route::get('/sales', 'AffiliateController@sales');
    Route::get('/cooperate', 'AffiliateController@cooperate');
});

Route::group(['prefix' => 'about'], function () {
    Route::get('/', 'AboutController@firm');
    Route::get('/culture', 'AboutController@culture');
    Route::get('/contact', 'AboutController@contact');
});

Route::group(['prefix' => 'strength'], function () {
    Route::get('/', 'StrengthController@cert');
    Route::get('/glory', 'StrengthController@glory');
});
