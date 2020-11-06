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

Route::get(
    '/',
    'HomeController@index'
);

Route::get(
    '/home',
    'HomeController@index'
)->name('home');

Route::view(
    '/login',
    'login'
)->name("login")->middleware('guest');

Route::post(
    'login',
    'Auth\LoginController@authenticate'
)->name('login.auth');

Route::get(
    'logout',
    'Auth\LoginController@logout'
)->name('logout');


