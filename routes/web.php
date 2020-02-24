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
    return view('landingpage');
});

Route::get('/SeputarLaman', function () {
    return view('seputarlaman');
});

// Route::get('/Pencarian', function () {
//     return view('pencarian');
// });

Route::get('/Kedalaman/login', function () {
    return view('kedalamankata-al');
});

Route::get('/home', 'HomeController@index')->name('seputarlaman-al');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('admin');

Route::get('/usersearch', function () {
    return view('pencarian');
});

Route::get('/usersearch', 'nounController@search')->name('carikata');

Auth::routes();


