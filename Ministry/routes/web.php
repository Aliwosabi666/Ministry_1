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
    return view('admin');
});
Route::get('/admin-user-add', function () {
    return view('admin-user-add');
});


Route::get('/admin-user-all', function () {
    return view('admin-user-all');
});

Route::get('/algeria_students_add', function () {
    return view('algeria_students_add');
});

Route::get('/algeria_students_all', function () {
    return view('algeria_students_all');
});

Route::get('/china_students_add', function () {
    return view('china_students_add');
});

Route::get('/china_students_all', function () {
    return view('china_students_all');
});

Route::get('/lebanon_students_add', function () {
    return view('lebanon_students_add');
});

Route::get('/lebanon_students_all', function () {
    return view('lebanon_students_all');
});


Route::get('/student_morocco_add','App\Http\Controllers\MoroccoStudentsController@create')->name('student_morocco_add');
Route::post('/student_morocco_add','App\Http\Controllers\MoroccoStudentsController@store')->name('student_morocco_add');
Route::get('/student_morocco_all/{id}','App\Http\Controllers\MoroccoStudentsController@show')->name('student_morocco_all');


Route::get('/student_morocco_all/{id}/student_morocco_edit','App\Http\Controllers\MoroccoStudentsController@edit')->name('student_morocco_all');
Route::put('/student_morocco_all/{id}','App\Http\Controllers\MoroccoStudentsController@update')->name('student_morocco_all');

/*Route::get('/student_morocco_add', function () {
    return view('student_morocco_add');
});

Route::get('/student_morocco_all', function () {
    return view('student_morocco_all');
});
*/

Route::get('/tunisia_students_add', function () {
    return view('tunisia_students_add');
});

Route::get('/tunisia_students_all', function () {
    return view('tunisia_students_all');
});

Route::get('/admin-import-data', function () {
    return view('admin-import-data');
});

Route::get('/admin-export-data', function () {
    return view('admin-export-data');
});