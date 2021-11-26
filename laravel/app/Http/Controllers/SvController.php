<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SvController extends Controller
{
    public function dangky()
    {
        return view('sinhvien.dangky');
    }

    public function ketqua()
    {
        return view('sinhvien.ketqua');
    }

    public function lichsu()
    {
        return view('sinhvien.lichsu');
    }
}
