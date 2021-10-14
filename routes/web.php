<?php

use Illuminate\Support\Facades\Route;

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
    return view('v2/deskripsi');
});

//--------------- v2 ---------------------//
Route::get('/v2', function () {
    return view('v2/deskripsi');
});
Route::get('/v2/biodata', function () {
    return view('v2/biodata');
});
Route::get('/v2/riwayat-pendidikan', function () {
    return view('v2/rpendidikan');
});
Route::get('/v2/riwayat-organisasi', function () {
    return view('v2/rorganisasi');
});
Route::get('/v2/riwayat-pekerja', function () {
    return view('v2/rpekerja');
});
Route::get('/v2/bahasa', function () {
    return view('v2/bahasa');
});
Route::get('/v2/it-skills', function () {
    return view('v2/skill');
});
Route::get('/v2/penghargaan', function () {
    return view('v2/penghargaan');
});
Route::get('/v2/portofolio', function () {
    return view('v2/portofolio');
});
Route::get('/v2/galeri-video', function () {
    return view('v2/galeri');
});

//--------------- v1 --------------------//
Route::get('/deskripsi', function () {
    return view('deskripsi');
});
Route::get('/data-personal', function () {
    return view('personal');
});
Route::get('/riwayat-pendidikan', function () {
    return view('pendidikan');
});
Route::get('/kemampuan-bahasa', function () {
    return view('bahasa');
});
Route::get('/it-skills', function () {
    return view('skill');
});
Route::get('/riwayat-organisasi', function () {
    return view('organisasi');
});
Route::get('/riwayat-pekerjaan', function () {
    return view('pekerjaan');
});
Route::get('/penghargaan', function () {
    return view('penghargaan');
});
Route::get('/portofolio', function () {
    return view('portofolio');
});
Route::get('/galeri-video', function () {
    return view('galeri');
});

