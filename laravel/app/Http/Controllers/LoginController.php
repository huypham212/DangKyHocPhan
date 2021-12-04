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

        if($masv == 'admin' && $password == 'admin'){
            return redirect('sinhvien');
        }
        else{
            $check_sv = DB::table('sinhvien')->where('MaSV', $masv)->get();
            $sv = json_decode($check_sv, true);
            //echo $sv;

            if($check_sv == null){
                return redirect()->back();
            }
            else{
                $check_pass = DB::table('sinhvien')->where('MaSV', $masv)->select('MatKhau')->get();

                $pass = implode(" ", array_column(json_decode($check_pass, true), 'MatKhau'));
                
                if($pass == $password){
                    SESSION::put('masv', $masv);
                    return redirect('dangky');
                }
                else{
                    return redirect()->back();
                }

            }
        }
    }

    public function log_out(){
        SESSION::put('masv', null);

        return redirect('login');
    }
}
