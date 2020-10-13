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
