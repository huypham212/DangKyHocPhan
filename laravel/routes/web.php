<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImportSVController;
use App\Http\Controllers\ImportGVController;

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


//Route to reset password
Route::get('/password', 'PasswordController@index')->name('password');
Route::post('/password', 'PasswordController@valid_password'); 

//Route to Import
Route::post('importSV', [ImportSVController::class, 'importSV']);
Route::post('importGV', [ImportGVController::class, 'importGV']);

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