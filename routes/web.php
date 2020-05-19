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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', "StudentController@index");
Route::get('/edit/{id}', "StudentController@edit");
Route::get('/create', "StudentController@create");
Route::post('/store', "StudentController@store");
Route::post('/update/{id}', "StudentController@update");
Route::get('/delete_home/{id}', "StudentController@delete_home");
Route::get('/delete_create/{id}', "StudentController@delete_create");
Route::get('/delete_edit/{id}', "StudentController@delete_edit");
Route::get('/show/{id}', "StudentController@show");

Route::get('/about', function(){
    return view ('about');
});