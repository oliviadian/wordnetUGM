<?php

use App\noun;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/SeputarLaman', function () {
    return view('seputarlaman');
});

// Route::get('/Pencarian', function () {
//     return view('pencarian');
// });

Route::get('/home', 'HomeController@index')->name('seputarlaman-al');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('admin');

Route::get('/Kedalaman/login', function () {
    return view('kedalamankata-al');
});

Route::get('logout', 'HomeController@logout')->name('logout');

Route::get('/usersearch', function () {
    return view('pencarian');
});

Route::get('/usersearch', 'nounController@search')->name('carikata');

Auth::routes();


