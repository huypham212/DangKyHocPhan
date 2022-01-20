<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImportSVController;
use App\Http\Controllers\ImportGVController;
use App\Http\Controllers\ImportLopController;
use App\Http\Controllers\ImportMHController;
use App\Http\Controllers\ImportLopHPController;

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

//Dashboard Route
Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/login', 'DashboardController@login')->name('login');

//Login Route
Route::post('/login', 'LoginController@valid_login');
Route::get('/log_out', 'LoginController@log_out')->name('logout');
Route::get('/dangky', 'LoginController@dangky')->name('dangky');
Route::get('/index', 'LoginController@index')->name('huy');


//Route to reset password
Route::get('/password', 'PasswordController@index')->name('password');
Route::post('/password', 'PasswordController@valid_password'); 

//Route to Import
Route::post('importSV', [ImportSVController::class, 'importSV']);
Route::post('importGV', [ImportGVController::class, 'importGV']);
Route::post('importLop', [ImportLopController::class, 'importLop']);
Route::post('importLopHP', [ImportLopHPController::class, 'importLopHP']);
Route::post('importMH', [ImportMHController::class, 'importMH']);

Route::resources([
    'khoa' => 'KhoaController',
    'nganh' => 'NganhController',
    'monhoc' => 'MonhocController',
    'lop' => 'LopController',
    'lophp' => 'LopHPController',
    'sinhvien' => 'SinhvienController',
    'dsdk' => 'DSDKController',
    'svmh' => 'SVMHController',
    'giangvien' => 'GiangvienController',
    'thongbao' => 'ThongbaoController',
    'dangky' => 'DangKyController',
    'ketqua' => 'KetQuaController',
    'lichsu' => 'LichSuController',
]);