<?php

use App\noun;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/SeputarLaman', function () {
    return view('seputarlaman');
});

Route::get('/SeputarLaman/Al', function () {
    return view('seputarlaman-al');
});

// Route::get('/Pencarian', function () {
//     return view('pencarian');
// });

Route::get('/SeputarLaman/Al', 'HomeController@index')->name('seputarlaman-al');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('admin');

Route::get('/Kedalaman/login', function () {
    return view('kedalamankata-al');
});

Route::get('logout', 'HomeController@logout')->name('logout');

Route::get('/usersearch', function () {
    return view('pencarian');
});

Route::get('/usersearch', 'nounController@search')->name('carikata');

// Route::get('/pencarian/verb', function () {
//     return view('pencarian-verb');
// });

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


