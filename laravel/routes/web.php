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

//Route to dashboard
Route::get('/', function () {
    return view('dashboard');
});

//Route to login
Route::get('/login', function () {
    return view('login');
})->name('login');

//Route to reset password
Route::get('/password', function () {
    return view('password');
})->name('password'); 

//Route to dangky
Route::get('/dangky', function () {
    return view('sinhvien.dangky');
})->name('dangky');

//Route to ketqua
Route::get('/ketqua', function () {
    return view('sinhvien.ketqua');
})->name('ketqua');

//Route to lichsu
Route::get('/lichsu', function () {
    return view('sinhvien.lichsu');
})->name('lichsu');

//Route to admin dashboard
Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin');

//Route to admin sinhvien
Route::get('/sinhvien', function () {
    return view('admin.sinhvien');
})->name('sinhvien');

//Route to admin giangvien
Route::get('/giangvien', function () {
    return view('admin.giangvien');
})->name('giangvien');

//Route to admin lop
Route::get('/lop', function () {
    return view('admin.lop');
})->name('lop');

//Route to admin monhoc
Route::get('/monhoc', function () {
    return view('admin.monhoc');
})->name('monhoc');

//Route to admin lophp
Route::get('/lophp', function () {
    return view('admin.lophp');
})->name('lophp');

//Route to admin sv-mh
Route::get('/state', function () {
    return view('admin.sv-mh');
})->name('state');