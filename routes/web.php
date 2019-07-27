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
    return redirect('/home');
});
Route::get('home','ViewController@index')->name('index');
Route::get('contact','ViewController@contact')->name('contact');
Route::get('Reservations','ViewController@Reservations')->name('Reservations');
Route::get('About-us','ViewController@About')->name('About');
Route::get('Destinations','ViewController@Destinations')->name('Destinations');
Route::post('route','ViewController@route')->name('route');
Route::post('routeone','ViewController@routeone')->name('routeone');
Route::post('newsletter','ViewController@newsletter')->name('newsletter');
Route::get('services','ViewController@services')->name('services');
Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es'
    ]);