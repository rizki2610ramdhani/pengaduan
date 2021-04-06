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

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postlogin');
Route::get('/register', 'MasyarakatController@register')->name('register');
Route::post('/register', 'MasyarakatController@postregister');
Route::get('/register-admin', 'AdminController@register')->name('registeradmin');
Route::post('/register-admin', 'AdminController@postregister');


Route::group(['middleware' => 'auth:masyarakat'], function () {
    Route::get('/masyarakat-dashboard', 'MasyarakatController@dashboard');
    Route::get('/m-show-aduan/{id}', 'MasyarakatController@show');
    Route::get('/masyarakat-create-aduan', 'MasyarakatController@create');
    Route::post('/masyarakat-create-aduan', 'MasyarakatController@postcreate');
    Route::get('/masyarakat-profile', 'MasyarakatController@profile');
});

Route::group(['middleware' => 'auth:petugas'], function () {

    Route::group(['middleware' => 'checkLevel:petugas'], function () {
        Route::get('/petugas-dashboard', 'PetugasController@dashboard');
        Route::get('/petugas-daftar-aduan', 'PetugasController@aduan');
        Route::get('/petugas-proses/{id}', 'PetugasController@proses');
        Route::get('/p-show-aduan/{id}', 'PetugasController@show');
        Route::get('/petugas-lanjutan/{id}', 'PetugasController@lanjutan');
        Route::post('/petugas-lanjutan/{id}', 'PetugasController@postlanjutan');
        Route::get('/petugas-profile', 'PetugasController@profile');
    });

    Route::group(['middleware' => 'checkLevel:admin'], function () {
        Route::get('/admin-dashboard', 'AdminController@dashboard');
        Route::get('/a-show-aduan/{id}', 'AdminController@show');
        Route::get('/admin-daftar-petugas', 'AdminController@petugas');
        Route::get('/admin-daftar-masyarakat', 'AdminController@masyarakat');
        Route::get('/admin-daftar-petugas', 'AdminController@petugas');
        Route::get('/admin-create-petugas', 'AdminController@createpetugas');
        Route::post('/admin-create-petugas', 'AdminController@postpetugas');
        Route::get('/admin-profile', 'AdminController@profile');
        Route::get('/admin-cetak', 'AdminController@cetak');
        Route::get('/admin-cetak-l', 'AdminController@postcetak');
    });
});

Route::group(['middleware' => 'auth:petugas,masyarakat'], function () {
    Route::get('/logout', 'AuthController@logout');
});
