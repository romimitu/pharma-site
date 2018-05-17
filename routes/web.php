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
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/* Ad-min Panel Routes */

Route::get('message','AdminController@ContactMessage');

Route::resource('blog','BlogController');
Route::resource('photo','PhotoController');
Route::resource('about-us','AboutController');
Route::resource('slider','SliderController');
Route::resource('member','MemberController');
Route::resource('page','PageController');
Route::resource('product','ProductController');

Route::resource('hospital','HospitalController');
Route::resource('doctor','DoctorController');
Route::resource('pharmacy','PharmacyController');
Route::resource('depot','DepotController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
