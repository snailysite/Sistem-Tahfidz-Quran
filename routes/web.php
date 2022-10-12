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

use App\Http\Controllers\Auth\LoginController;
use FontLib\Table\Type\name;


Route::get('/', function () {
    return view('welcome');
});

// route santri (admin)

Route::get('/dashboard', 'SistaqController@beranda');
Route::get('/santri', 'SistaqController@santri');

Route::get('/santritahfidz1', 'SistaqController@index')->name('tahfidz1');
Route::get('/santritahfidz2', 'Sistaq1Controller@index1')->name('tahfidz2');
Route::get('/santritahfidz3', 'Sistaq2Controller@index2')->name('tahfidz3');

Route::get('/presensitahfidz1', 'SistaqController@presensi1');
Route::get('/presensitahfidz2', 'Sistaq1Controller@presensi2');
Route::get('/presensitahfidz3', 'Sistaq2Controller@presensi3');

Route::get('/tambahsantri', 'SistaqController@tambahsantri');

Route::get('/printkode/{id}', 'SistaqController@printkode1');
Route::get('/printkode2/{id}', 'Sistaq1Controller@printkode2');
Route::get('/printkode3/{id}', 'Sistaq2Controller@printkode3');



Route::get('/deletesantri/{id}','SistaqController@deletesantri');
Route::get('/deletesantri2/{id}','Sistaq1Controller@deletesantri2');
Route::get('/deletesantri3/{id}','Sistaq2Controller@deletesantri3');

Route::get('/editsantri/{id}', 'SistaqController@edit');
Route::get('/editsantri2/{id}', 'Sistaq1Controller@edit2');
Route::get('/editsantri3/{id}', 'Sistaq2Controller@edit3');

Route::get('/viewsantri/{id}','SistaqController@view1');
Route::get('/viewsantri2/{id}','SistaqController@view1');
Route::get('/viewsantri3/{id}','SistaqController@view1');


Route::get('/tahfidz1','Tahfidz1Controller@tahfidz1');
Route::get('/tahfidz2','Tahfidz2Controller@tahfidz2');
Route::get('/tahfidz3','Tahfidz3Controller@tahfidz3');

Route::get('/setorantahfidz1','Tahfidz1Controller@setorantahfidz1');
Route::get('/setorantahfidz2','Tahfidz2Controller@setorantahfidz2');
Route::get('/setorantahfidz3','Tahfidz3Controller@setorantahfidz3');

Route::post('/tambahdata', 'SistaqController@tambahdata');

Route::post('/proses-edit', 'SistaqController@editdata');
Route::post('/proses-edit2', 'Sistaq1Controller@editdata2');
Route::post('/proses-edit3', 'Sistaq2Controller@editdata3');





// route penyimak (admin)

Route::get('/datapenyimak', 'Penyimak1Controller@penyimak');

Route::get('/penyimak1', 'Penyimak1Controller@penyimak1')->name('penyimak1');
Route::get('/penyimak2', 'Penyimak2Controller@penyimak2')->name('penyimak2');
Route::get('/penyimak3', 'Penyimak3Controller@penyimak3')->name('penyimak3');

Route::get('/tambahpenyimak', 'Penyimak1Controller@tambahpenyimak');

Route::get('/deletepenyimak1/{id}','Penyimak1Controller@deletepenyimak1');
Route::get('/deletepenyimak2/{id}','Penyimak2Controller@deletepenyimak2');
Route::get('/deletepenyimak3/{id}','Penyimak3Controller@deletepenyimak3');

Route::get('/editpenyimak1/{id}', 'Penyimak1Controller@edit1');
Route::get('/editpenyimak2/{id}', 'Penyimak2Controller@edit2');
Route::get('/editpenyimak3/{id}', 'Penyimak3Controller@edit3');

Route::post('/tambahdatapenyimak', 'Penyimak1Controller@tambahdatapenyimak');

Route::post('/proses-editpenyimak1', 'Penyimak1Controller@editpenyimak1');
Route::post('/proses-editpenyimak2', 'Penyimak2Controller@editpenyimak2');
Route::post('/proses-editpenyimak3', 'Penyimak3Controller@editpenyimak3');


// route untuk user(penyimak)

Route::get('/absensitahfidz1', 'SistaqController@absensi1')->name('absensi1');
Route::get('/absensitahfidz2', 'Sistaq1Controller@absensi2');
Route::get('/absensitahfidz3', 'Sistaq2Controller@absensi3');


Route::post('/postabsensi1', 'SistaqController@absensitahfidz1');


//import
Route::post('/SantriImportexcel','ImportController@SantriImportexcel')->name('SantriImportexcel');


// login
route::get('/login',function(){
    return view ('login');
});

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

// registrasi

Route::get('register','LoginController@register')->name('register');
Route::post('/postregister', 'LoginController@postregister')->name('register');


// raport

Route::get('/laporan','SistaqController@laporan');
