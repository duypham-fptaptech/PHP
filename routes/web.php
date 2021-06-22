<?php

use App\Http\Controllers\StudentController;
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

Route::get('/home', function () {
    return view('Home');
});
// Route::get('/student/create', [StudentController::class, 'create']);

Route::get('/student/create', function () {
    return view('admin/student/Create');
});
Route::get('/student/list', function () {
    return view('admin/student/ListStudent');
});
Route::get('/student/detail', function () {
    return view('admin/student/DetailStudent');
});
Route::get('/student/update', function () {
    return view('admin/student/UpdateStudent');
});
Route::get('/student/delete', function () {
    return view('admin/student/DeleteStudent');
});


Route::get('/teacher/create', function () {
    return view('admin/teacher/CreateTeacher');
});
Route::get('/teacher/list', function () {
    return view('admin/teacher/ListTeacher');
});
Route::get('/teacher/detail', function () {
    return view('admin/teacher/DetailTeacher');
});
Route::get('/teacher/update', function () {
    return view('admin/teacher/UpdateTeacher');
});
Route::get('/teacher/delete', function () {
    return view('admin/teacher/DeleteTeacher');
});
