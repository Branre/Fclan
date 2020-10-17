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

//use Illuminate\Routing\Route;


Route::get('/','PagesController@home');
Route::get('publicacion/{id}','ClansController@show')->name('clans.show');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'admin',
     'middleware' => 'auth'], 
     function () {
    Route::get('/','AdminController@index')->name('admin');
    Route::get('clanes','ClansController@index')->name('admin.clans.index');
    Route::get('clanes/create','ClansController@create')->name('admin.clan.create');
    Route::post('clanes','ClansController@store')->name('admin.clan.store');
});

Route::auth();