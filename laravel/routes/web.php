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