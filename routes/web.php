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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('matkul', 'MatkulController@index')->name('matkul');
Route::get('tambah.matkul', 'MatkulController@create')->name('tambah.matkul');
Route::post('simpan.matkul', 'MatkulController@store')->name('simpan.matkul');

Route::get('edit-matkul/{id}', 'MatkulController@edit')->name('edit.matkul');
Route::post('update.matkul/{id}', 'MatkulController@update')->name('update.matkul');
Route::get('hapus-matkul/{id}', 'MatkulController@destroy')->name('hapus.matkul');

Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('tambah.mahasiswa', 'MahasiswaController@create')->name('tambah.mahasiswa');
Route::post('simpan.mahasiswa', 'MahasiswaController@store')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('edit.mahasiswa');
Route::post('update.mahasiswa/{id}', 'MahasiswaController@update')->name('update.mahasiswa');
Route::get('hapus-mahasiswa/{id}', 'MahasiswaController@destroy')->name('hapus.mahasiswa');

Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('tambah.nilai', 'NilaiController@create')->name('tambah.nilai');
Route::post('simpan.nilai', 'NilaiController@store')->name('simpan.nilai');

Route::get('edit-nilai/{id}', 'NilaiController@edit')->name('edit.nilai');
Route::post('update.nilai/{id}', 'NilaiController@update')->name('update.nilai');
Route::get('hapus-nilai/{id}', 'NilaiController@destroy')->name('hapus.nilai');