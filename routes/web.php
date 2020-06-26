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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/content', function (){
    return view ('content');
})->name('content');

Route::get('/contact', function (){
    return view('contact');
})->name('contact');

Route::get('/event', function(){
    return view('event');
})->name('event');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/personalData', 'PersonalDataController@index')->name('personalData');
Route::get('/chat/{id}', 'ChatController@index')->name('chat');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::post('/personalDataSave', 'PersonalDataController@save')->name('personalDataSave');
Route::post('/personalDataCanton', 'PersonalDataController@loadCanton')->name('personalDatacanton');
Route::post('/personalDataDistrict', 'PersonalDataController@loadDistrict')->name('personalDatadistrict');
