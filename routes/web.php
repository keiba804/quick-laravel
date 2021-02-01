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

Route::get('hello', 'App\Http\Controllers\HelloController@index');

Route::get('hello/view', 'App\Http\Controllers\HelloController@view');

Route::get('hello/list', 'App\Http\Controllers\HelloController@list');

Route::get('view/escape', 'App\Http\Controllers\ViewController@escape');

Route::get('view/if', 'App\Http\Controllers\ViewController@if');

Route::get('view/isset', 'App\Http\Controllers\ViewController@isset');

Route::get('view/switch', 'App\Http\Controllers\ViewController@switch');

Route::get('view/while', 'App\Http\Controllers\ViewController@while');

Route::get('view/foreach_assoc', 'App\Http\Controllers\ViewController@foreach_assoc');

Route::get('view/forelse', 'App\Http\Controllers\HelloController@list');

Route::get('view/master', 'App\Http\Controllers\ViewController@master');