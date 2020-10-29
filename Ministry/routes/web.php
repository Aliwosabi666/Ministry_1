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
    return view('backend.admin');
});
Route::get('/backend/admin-user-add', function () {
    return view('backend.admin-user-add');
});


Route::get('/backend/admin-user-all', function () {
    return view('backend.admin-user-all');
});

Route::get('/backend/algeria_students_add', function () {
    return view('backend.algeria_students_add');
});

Route::get('/backend/algeria_students_all', function () {
    return view('backend.algeria_students_all');
});

Route::get('/backend/china_students_add', function () {
    return view('backend.china_students_add');
});

Route::get('/backend/china_students_all', function () {
    return view('backend.china_students_all');
});

Route::get('/backend/lebanon_students_add', function () {
    return view('backend.lebanon_students_add');
});

Route::get('/backend/lebanon_students_all', function () {
    return view('backend.lebanon_students_all');
});


Route::get('/backend/student_morocco_add','App\Http\Controllers\MoroccoStudentsController@create')->name('backend.student_morocco_add');
Route::post('/backend/student_morocco_add','App\Http\Controllers\MoroccoStudentsController@store')->name('backend.student_morocco_add');
Route::get('/backend/student_morocco_all','App\Http\Controllers\MoroccoStudentsController@show')->name('backend.student_morocco_all');


//Route::get('/backend/student_morocco_edit/{id}','App\Http\Controllers\MoroccoStudentsController@edit')->name('backend.student_morocco_edit');
//Route::put('/backend/student_morocco_edit/{id}','App\Http\Controllers\MoroccoStudentsController@update')->name('backend.student_morocco_edit');


Route::get('/backend/{id}/student_morocco_edit','App\Http\Controllers\MoroccoStudentsController@edit')->name('backend.student_morocco_edit');
Route::put('/backend/{id}','App\Http\Controllers\MoroccoStudentsController@update')->name('backend.update');

Route::delete('/backend/{id}','App\Http\Controllers\MoroccoStudentsController@destroy')->name('backend.destroy');

/*Route::get('/student_morocco_add', function () {
    return view('student_morocco_add');
});

Route::get('/student_morocco_all', function () {
    return view('student_morocco_all');
});
*/

Route::get('/backend/tunisia_students_add', function () {
    return view('backend.tunisia_students_add');
});

Route::get('/backend/tunisia_students_all', function () {
    return view('backend.tunisia_students_all');
});

Route::get('/backend/admin-import-data', function () {
    return view('backend.admin-import-data');
});

Route::get('/backend/admin-export-data', function () {
    return view('backend.admin-export-data');
});
