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

// ===================
//      users
// ===================

Route::get(
    '/users',
    'UserController@index'
)->name("admin_users_index");

Route::get(
    '/user/create',
    'UserController@create'
)->name("admin_users_create");

Route::post(
    '/user/create',
    'UserController@createPost'
)->name("admin_users_create_post");

Route::get(
    '/user/{userId}/update',
    'UserController@update'
)->name("admin_users_update");

Route::post(
    '/user/{userId}/update',
    'UserController@updatePost'
)->name("admin_users_update_post");

Route::get(
    '/user/{userId}/delete',
    'UserController@delete'
)->name("admin_users_delete");

// ===================
//      Departamentos
// ===================


Route::get(
    '/departments',
    'DeptoController@index'
)->name("admin_departments_index");

Route::get(
    'departments/create',
    'DeptoController@create'
)->name("admin_departments_create");

Route::post(
    'departments/create',
    'DeptoController@createPost'
)->name("admin_departments_create_post");

Route::get(
    'departments/{deptoId}/update',
    'DeptoController@update'
)->name("admin_departments_update");

Route::post(
    'departments/{deptoId}/update',
    'DeptoController@updatePost'
)->name("admin_departments_update_post");

Route::get(
    'departments/{deptoId}/delete',
    'DeptoController@delete'
)->name("admin_departments_delete");

// ===================
//      Internal Student
// ===================

Route::get(
    '/internal-students',
    'InternalStudentController@index'
)->name("admin_internal_student_index");

Route::get(
    'internal-student/create',
    'InternalStudentController@create'
)->name("admin_internal_student_create");

Route::post(
    'internal-student/create',
    'InternalStudentController@createPost'
)->name("admin_internal_student_create_post");

Route::get(
    'internal-student/{studentId}/update',
    'InternalStudentController@update'
)->name("admin_internal_student_update");

Route::post(
    'internal-student/{studentId}/update',
    'InternalStudentController@updatePost'
)->name("admin_internal_student_update_post");

Route::get(
    'internal-student/{studentId}/delete',
    'InternalStudentController@delete'
)->name("admin_internal_student_delete");
