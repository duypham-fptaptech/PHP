<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

//Route::get('/student/create', function () {
//    return view('admin/student/Create');
//});
Route::get('/users/signup', [UserController::class , 'signup']);
Route::post('/users/signup', [UserController::class , 'signups']);

Route::get('/users/login', [UserController::class , 'login']);
Route::post('/users/login', [UserController::class , 'logins']);

Route::get('/users/detail/{id}', [UserController::class , 'getUserDetail']);

Route::get('/layout/page1', [LayoutController::class , 'Page1']);
Route::get('/layout/page2', [LayoutController::class , 'Page2']);
Route::get('/layout/page3', [LayoutController::class , 'Page3']);

