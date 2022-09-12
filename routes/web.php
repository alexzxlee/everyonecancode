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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testRedis', function () {
    $redis = app()->make('redis');
    // $redis->set("key1", "testValue1");
    // $redis->expire("key1", 1);
    $redis->set("key2", "testValue2");
    $redis->lpush("colors", "red");
    $redis->lpush("colors", "yellow");
    $redis->lpush("colors", "blue");
    $redis->lpush("colors", "orange");
    $redis->lpush("colors", "sunny");

    $list = $redis->keys("*");
    $redis->disconnect();
    
    return array_merge($list, $redis->lrange("colors", 0, 2));
});

Route::get('/farm', function() {return view('farm');});
Route::get('/projects', function() {return view('projects');});
Route::get('/kombuchas', function() {return view('kombuchas');});

// Article
Route::get('/article/{id}', 'App\Http\Controllers\BlogController@showArticle')->where('id', '[0-9]+');
Route::get('/articles', 'App\Http\Controllers\BlogController@index')->where('id', '[0-9]+');

// Transaction
Route::get('/transactions', 'App\Http\Controllers\TransactionController@index');
Route::delete('/transaction/{id}', 'App\Http\Controllers\TransactionController@destroy');
Route::get('/transaction/{id}', 'App\Http\Controllers\TransactionController@show');

// Customer
Route::get('/customers', 'App\Http\Controllers\CustomerController@index');
Route::get('/customer/create', 'App\Http\Controllers\CustomerController@create');
Route::post('/customer/create', 'App\Http\Controllers\CustomerController@store');
Route::get('/customer/{id}', 'App\Http\Controllers\CustomerController@show');
Route::get('/customer/{id}/edit', 'App\Http\Controllers\CustomerController@edit');
Route::put('/customer/{id}', 'App\Http\Controllers\CustomerController@update');
Route::delete('/customer/{id}', 'App\Http\Controllers\CustomerController@destroy');

// Animal
Route::get('/animals/index', 'App\Http\Controllers\AnimalController@index');
Route::get('/animals', 'App\Http\Controllers\AnimalController@selectAnimals');
Route::get('/{type?}/{numberOfAnimals?}/{reverse?}', 'App\Http\Controllers\AnimalController@animals')->name('request','type','numberOfAnimals','reverse');
Route::post('/buy', 'App\Http\Controllers\AnimalController@buy');
