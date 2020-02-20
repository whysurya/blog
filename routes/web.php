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

Route::group(['prefix' => 'master'], function(){
    // route untuk jurusan dan kelas
    route::get('jurusan-kelas','Master\JurusankelasController@index')->name('master.jurusan-kelas');
    route::get('tampilkan/form-baru','Master\JurusankelasController@create')->name('master.tampilkan.form-baru');
    route::post('kirim/data/baru','Master\JurusankelasController@store')->name('master.kirim.data.baru');

    route::get('edit-jurusan/{jurusan}', 'master\jurusankelasController@edit')->name('master.edit-jurusan');
    route::PUT('master/jurusan/{jurusan}', 'master\jurusankelasController@update')->name('master.update.jurusan');
    route::DELETE('hapus/data/{jurusan}', 'master\jurusankelasController@destroy')->name('master.hapus.data');

    // route master industri
    route::get('industri', 'Master\IndustriController@index')->name('master.industri');
    route::get('tampilkan/form-baru', 'Master\IndustriController@create')->name('master.tampilkan.form-baru');
    route::post('kirim/data/baru', 'Master\IndustriController@store')->name('master.kirim.data.baru');

     /* Route Master PKL */ 
   route::get('pkl','Master\PklController@index')->name('master.pkl');
   route::get('tampilkan/detail/permohonan/pkl-psg','Master\PklController@show')->name('master.tampilkan.detail.permohonan.pkl-psg');


//    route master nilai
    route::get('nilai','Master\nilaicontroller@index')->name('master.nilai');
    route::get('tampilkan/form/nilai', 'Master\nilaicontroller@create')->name('master.tampilkan.form.nilai');

    // master monitoring
    route::get('monitoring','Master\MonitoringController@index')->name('master.monitoring');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/youtube','YoutubeController@index')->name('youtube');

Route::get('watch/Sedang-Streaming','YoutubeController@show')->name('watch/Sedang-Streaming');
