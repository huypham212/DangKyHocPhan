<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\sinhvien;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function dangky()
    {
        return view('sinhvien.dangky');
    }

    public function valid_login(Request $request)
    {
        $masv = $request->input('masv');
        $password = $request->input('password');

        if ($masv == 'admin' && $password == 'admin') {
            return redirect(route('sinhvien.index'));
        } else {
            $check_sv = DB::table('sinhvien')->where('MaSV', $masv)->get()->toArray();

            if ($check_sv == null) {
                return back()->with('status', 'Không tồn tại mã sinh viên này!');
            } else {

                if ($check_sv[0]->MatKhau == $password) {

                    SESSION::put('masv', $masv);
                    if ($check_sv[0]->isFirstLogin == 0) {
                        return redirect('password')->with('status', "Vui lòng đổi mật khẩu cho lần đăng nhập đầu tiên!");
                    } else {
                        return redirect('dangky');
                    }
                } else {
                    return back()->with('status', 'Sai mật khẩu!');
                }
            }
        }
    }

    public function log_out()
    {
        SESSION::put('masv', null);

        return redirect('login');
    }
}
