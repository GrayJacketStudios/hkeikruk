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
    return view('home');
});

Route::get('habitaciones', function(){
    return view('rooms');
});

Route::get('tarifas', function(){
    return view('tarifas');
});


Route::get('lang/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return \Redirect::back();
})->where([
    'lang' => 'en|es|de|fr|nl'
]);


Route::get('contacto', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');