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
    return view('laboratorista.bienvenida');
})->name("home_labo");



// ===================
//      Internal Student
// ===================

Route::get(
    '/internal-students',
    'InternalStudentController@index'
)->name("labo_internal_student_index");

// ===================
//      External Student
// ===================

Route::get(
    '/external-students',
    'ExternalStudentController@index'
)->name("labo_external_student_index");


// ===================
//      Departamentos
// ===================


Route::get(
    '/departments',
    'DeptoController@index'
)->name("labo_departments_index");

// ===================
//      Carreras
// ===================


Route::get(
    '/carreras',
    'CarrerasController@index'
)->name("labo_carreras_index");

// ===================
//      Checks
// ===================

Route::get(
    '/checks',
    'CheckController@index'
)->name("labo_checks_index");

Route::post(
    '/{registerId}/create-comment',
    'CheckController@createComments'
)->name("labo_comment_create");

Route::post(
    '/{registerId}/check-register',
    'CheckController@checkRegister'
)->name("labo_check_register");
