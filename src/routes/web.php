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


// 一般ユーザー
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});


    Route::get('/list', function () {
        return view('list');
    });
    
    Route::get('/entry', function () {
        return view('entry');
    });
    
    Route::get('/detail', function () {
        return view('detail');
    });
    
    Route::get('/request', function () {
        return view('request');
    });







// 管理者ユーザー
Route::get('/admin/login', function () {
    return view('auth.admin_login');
});

Route::get('/admin/attendance/list', function () {
    return view('admin_list');
});

Route::get('/attendance/id', function () {
    return view('admin_detail');
});

Route::get('/admin/staff/list', function () {
    return view('staff_list');
});

Route::get('/admin/attendance/staff/id', function () {
    return view('staff_detail');
});


Route::get('/stamp_correction_request/list', function () {
    return view('admin_request');
});


Route::get('/stamp_correction_request/approve/attendance_correct_request', function () {
    return view('approval');
});