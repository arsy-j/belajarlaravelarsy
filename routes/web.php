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
    return view('welcome');
});
Route::get('/hello', function () {
    return 'selamat pagi dunia, namaku arsy';
});
Route::get('/hallo',function () {
    echo '<h1> selamat sejahtera dunia </h1>';
    echo '<p> nama saya mohammad arsy jahfal, mahasiswa di Poilteknik negeri Jember.';
});