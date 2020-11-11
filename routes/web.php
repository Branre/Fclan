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

//Route::get('/','PagesController@home');
Route::get('/','PagesController@home');
Route::get('publicacion/{clan}','ClansController@show')->name('clans.show');
Route::get('juegos/{juego}','JuegosController@show')->name('juegos.show');
Route::get('pais/{pais}','PaisController@show')->name('pais.show');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'admin',
     'middleware' => 'auth'], 
     function () {
        Route::get('/','AdminController@index')->name('admin');
    //Rutas Clanes
    Route::resource('clans','ClansController',['except'=>'show','as'=>'admin']);
    //Rutas Usuarios
    Route::resource('users','UsersController',['as'=>'admin']);
    /*
    
    Route::get('clans','ClansController@index')->name('admin.clans.index');
    Route::get('clans/create','ClansController@create')->name('admin.clan.create');
    Route::post('clans','ClansController@store')->name('admin.clan.store');
    Route::get('clans/{clan}','ClansController@edit')->name('admin.clan.edit');
    Route::put('clans/{clan}','ClansController@update')->name('admin.clan.update');
    Route::delete('clans/{clan}','ClansController@destroy')->name('admin.clan.destroy');
    */
    //Rutas Fotos
    Route::post('clanes/{clan}/photos','PhotosController@store')->name('clan.photos.store');
    Route::delete('photos/{photo}','PhotosController@destroy')->name('clan.photos.destroy');
    //Rutas Usuarios
    
});

Route::auth();