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
    return view('welcome');
})->name('index');//nameคือการตั้งชื่อสำหรับrouteใส่หน้านึงไปอีกหน้านึง

Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline'); 

Route::get('/message', function () {
    return view('message');
})->name('message'); 

Route::get('/navbar', function () {
    return view('navbar');
})->name('navbar'); 

Route::get('/account-setting', function () {
    return view('account-setting');
})->name('account-setting'); 

Route::get('/help-center', function () {
    return view('help-center');
})->name('help-center');

Route::get('/ket', function () {
    return view('ket');
})->name('ket'); 

Route::get('/upload', function () {
    return view('upload');
})->name('upload');

Route::get('/farm', function () {
    return view('farm');
})->name('farm'); 

Route::get('/book', function () {
    return view('book');
})->name('book'); 

Route::get('/seller-profile', function () {
    return view('seller-profile');
})->name('seller-profile'); 

Route::get('/product', function () {
    return view('product');
})->name('product'); 

Route::get('/user-profile', function () {
    return view('user-profile');
})->name('user-profile'); 

Route::get('/calender', function () {
    return view('calender');
})->name('calender'); 

Route::get('/my-profile-albums', function () {
    return view('my-profile-albums');
})->name('profilealbums'); 

Route::get('/my-profile-feed', function () {
    return view('my-profile-feed');
})->name('profilefeed'); 


Auth::routes();

Route::get('/message', 'HomeController@index')->name('message');

Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');