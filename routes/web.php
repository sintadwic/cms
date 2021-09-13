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
    echo('selamat datang');
});

Route::get('/about', function () {
    echo('Sinta Dwi Cahyani <br> 2031710090'); 

});

Route::get('/articles/1', function () {
    echo('halaman artikel dengan id 1');
});

Route::get('/articles/2', function () {
    echo('halaman artikel dengan id 2');
});