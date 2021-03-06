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
    return view('admin/welcome');
})->name("home_admin");

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
//      Carreras
// ===================


Route::get(
    '/carreras',
    'CarrerasController@index'
)->name("admin_carreras_index");

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

Route::get(
    'internal-student/{studentId}/availability',
    'InternalStudentController@showAvailability'
)->name("admin_internal_availability");

Route::post(
    'internal-student/{studentId}/availability',
    'InternalStudentController@createAvailability'
)->name("admin_internal_create_availability");

Route::get(
    'internal-student/{availabilityId}/delete-availability',
    'InternalStudentController@deleteAvailability'
)->name("admin_internal_delete_availability");

// ===================
//      External Student
// ===================

Route::get(
    '/external-students',
    'ExternalStudentController@index'
)->name("admin_external_student_index");

Route::get(
    'external-student/create',
    'ExternalStudentController@create'
)->name("admin_external_student_create");

Route::post(
    'external-student/create',
    'externalStudentController@createPost'
)->name("admin_external_student_create_post");

Route::get(
    'external-student/{studentId}/update',
    'ExternalStudentController@update'
)->name("admin_external_student_update");

Route::post(
    'external-student/{studentId}/update',
    'ExternalStudentController@updatePost'
)->name("admin_external_student_update_post");

Route::get(
    'external-student/{studentId}/delete',
    'ExternalStudentController@delete'
)->name("admin_external_student_delete");

Route::get(
    'external-student/{studentId}/availability',
    'ExternalStudentController@showAvailability'
)->name("admin_external_availability");

Route::post(
    'external-student/{studentId}/availability',
    'ExternalStudentController@createAvailability'
)->name("admin_external_create_availability");


Route::get(
    'external-student/{availabilityId}/delete-availability',
    'ExternalStudentController@deleteAvailability'
)->name("admin_external_delete_availability");

// ===================
//      Laboratoristas
// ===================

Route::get(
    '/laboratorista',
    'LaboratoristaController@index'
)->name("admin_laboratorista_index");

Route::get(
    'laboratorista/create',
    'LaboratoristaController@create'
)->name("admin_laboratorista_create");

Route::post(
    'laboratorista/create',
    'LaboratoristaController@createPost'
)->name("admin_laboratorista_create_post");

Route::get(
    'laboratorista/{laboId}/update',
    'laboratoristaController@update'
)->name("admin_laboratorista_update");

Route::post(
    'laboratorista/{laboId}/update',
    'LaboratoristaController@updatePost'
)->name("admin_laboratorista_update_post");

Route::get(
    'laboratorista/{laboId}/delete',
    'LaboratoristaController@delete'
)->name("admin_laboratorista_delete");

// ===================
//      Checks
// ===================

Route::get(
    '/checks',
    'CheckController@index'
)->name("admin_checks_index");

Route::post(
    '/{registerId}/create-comment',
    'CheckController@createComments'
)->name("admin_comment_create");

Route::post(
    '/{registerId}/check-register',
    'CheckController@checkRegister'
)->name("admin_check_register");

Route::post(
    '/{registerId}/update-hours',
    'CheckController@updateHours'
)->name("admin_check_update_hours");

// ===================
//      Report
// ===================

Route::post(
    'generate-report',
    'ReportController@generateReport'
)->name("admin_generate_report");
