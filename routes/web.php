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
    return view('welcome');
});


Route::get('category/create', 'admin\CategoryController@create');
Route::post('category/store', 'admin\CategoryController@store');
Route::get('category/index', 'admin\CategoryController@index');
Route::post('category/delete/{id}', 'admin\CategoryController@destroy');
Route::post('category/update/{id}', 'admin\CategoryController@update');
Route::get('category/{id}', 'admin\CategoryController@edit');

Route::get('stores/create', 'admin\StoreController@create');
Route::post('stores/store', 'admin\StoreController@store');
Route::get('stores/index', 'admin\StoreController@index');
Route::post('stores/delete/{id}', 'admin\StoreController@destroy');
Route::post('stores/update/{id}', 'admin\StoreController@update');
Route::get('stores/{id}', 'admin\StoreController@edit');

Route::get('/rating', 'admin\RatingController@ratings');
Route::get('rating/search', 'admin\RatingController@search');

Route::get('user/search', 'user\HomeController@search');
Route::get('user/home', 'user\HomeController@index');
Route::get('user/add_rating', 'user\HomeController@addRating');
Route::get('user/info/{id}', 'user\HomeController@storeInfo');
Route::get('user/stores/{id}', 'user\HomeController@stores');


Auth::routes([
   'register' => false
]);


Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
