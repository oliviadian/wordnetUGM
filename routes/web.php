<?php

use App\noun;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});

Route::get('/SeputarLaman', function () {
    return view('seputarlaman');
});

Route::get('/SeputarLaman/Al', function () {
    return view('seputarlaman-al');
});

Route::get('/admin/home', function () {
    return view('adminHome');
});

Route::get('/admin/home/noun', function () {
    return view('adminNoun');
});

Route::get('/admin/home/verb', function () {
    return view('adminVerb');
});

Route::get('/SeputarLaman/Al', 'HomeController@index')->name('seputarlaman-al');

Route::get('/admin/home', 'HomeController@admin')->name('adminHome')->middleware('admin');
Route::get('/admin/home/noun', 'HomeController@adminHomeN')->name('adminNoun')->middleware('admin');
Route::get('/admin/home/verb', 'HomeController@adminHomeV')->name('adminVerb')->middleware('admin');

Route::get('/jarak/al', function () {
    return view('jarakkata-al');
});

Route::post('/jarak/al', 'jarakController@jarak')->name('carijarak');

Route::get('/logout', function () {
    return view('landingpage');
});

Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/pencarian/noun', function () {
    return view('pencarian-noun');
});

Route::get('/pencarian/noun', 'nounController@searchnoun')->name('carikata');

Route::get('/pencarian/verb', function () {
    return view('pencarian-verb');
});

Route::get('/pencarian/verb', 'verbController@searchverb')->name('carikata');

Route::get('/pencarian/noun/al', function () {
    return view('pencarian-noun-al');
});

Route::get('/pencarian/noun/al', 'nounAlController@searchnounal')->name('carikata');

Route::get('/pencarian/verb/al', function () {
    return view('pencarian-verb-al');
});

Route::get('/pencarian/verb/al', 'verbAlController@searchverbal')->name('carikata');

Route::post('/pencarian/noun/al', 'tambahKatanController@isi')->name('isi');
Route::post('/pencarian/verb/al', 'tambahKatavController@isi')->name('isi');

Auth::routes();
Route::get('/home', 'HomeController@index');





