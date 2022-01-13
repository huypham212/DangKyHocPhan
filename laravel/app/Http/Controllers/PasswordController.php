<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Sinhvien;

class PasswordController extends Controller
{
    public function index()
    {
        return view('password');
    }

    public function valid_password(Request $request)
    {
        $old_pass = $request->input('oldPassword');
        $new__pass = $request->input('newPassword');
        $cfr_pass = $request->input('cfrNewPassword');

        $masv = SESSION::get('masv');

        $check_pass = DB::table('sinhvien')->where('MaSV', $masv)->select('MatKhau')->get();
        $pass = implode(" ", array_column(json_decode($check_pass, true), 'MatKhau'));

        if ($old_pass != $pass) {
            return redirect()->back();
        } else {
            if ($new__pass != $cfr_pass) {
                return redirect()->back();
            } else {
                $sv = Sinhvien::where('MaSV', $masv)->update([
                    'matkhau' => $cfr_pass,
                    'isfirstlogin' => 1
                ]);

                return redirect('/login');
            }
        }
    }
}
