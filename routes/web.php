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

Route::get("/", "App\Http\Controllers\PagesController@index")->name("home");
Route::get("/insert", 'App\Http\Controllers\PagesController@insert')->name("insert");
Route::post("/insert/base", 'App\Http\Controllers\PagesController@store')->name("insert-values");
Route::get("/storage", 'App\Http\Controllers\PagesController@storage')->name("storage");
Route::delete("/storage/{id}", 'App\Http\Controllers\PagesController@destroy')->name('delete');
Route::get('/storage/edit/{id}','App\Http\Controllers\PagesController@edit')->name('edit');
Route::put('/storage/edit/{id}', 'App\Http\Controllers\PagesController@update')->name('update');