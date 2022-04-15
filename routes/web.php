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

Route::get('/','App\Http\Controllers\pagesController@index');
Route::get('/about','App\Http\Controllers\pagesController@about');
Route::get('/services','App\Http\Controllers\pagesController@services');
/*
Route::get('/users/{id}/{name}', function ($id, $name) {
    //return view('welcome');
    return 'This is user '. $name.'with an id of '.$id ;
});
*/