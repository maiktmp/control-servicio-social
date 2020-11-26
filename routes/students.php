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

Route::view(
    '/',
    'student.welcome'
)->name("home_student");

Route::get(
    '/register-hour',
    'StudentController@registerHour'
)->name("student_register_hour");


