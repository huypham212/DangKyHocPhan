<?php

namespace App\Http\Controllers;

use App\Models\Sinhvien;
use App\Models\Lop;
use App\Models\Nganh;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exist_sv = DB::table('sinhvien')
            ->select(array('lop.malop', DB::raw('COUNT(sinhvien.masv) as siso')))
            ->join('lop', 'lop.malop', '=', 'sinhvien.malop')
            ->groupBy('lop.malop')
            ->get();

        $dataNganh = Nganh::all();
        $dataSV = Sinhvien::all();
        $dataLop = Lop::all();

        return view('admin.sinhvien.danhsachSV', [
            'dataSV' => $dataSV,
            'dataLop' => $dataLop,
            'dataNganh' => $dataNganh,
            'exist_sv' => $exist_sv,
            'index' => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataNganh = Nganh::all();
        $dataLop = Lop::all();
        return view('admin.sinhvien.themSV', [
            'dataLop' => $dataLop,
            'dataNganh' => $dataNganh
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masv = $request->input('masv');
        $check_sv = Sinhvien::where('MaSSV', $masv)->select('MaSV')->get();

        if(count($check_sv) == 0)
        {
            $sv = Sinhvien::create([
                'masv' => $request->input('masv'),
                'tensv' => $request->input('tensv'),
                'dob' => $request->input('dob'),
                'gioitinh' => $request->input('gioitinh'),
                'diachi' => $request->input('diachi'),
                'email' => $request->input('email'),
                'matkhau' => $request->input('matkhau'),
                'malop' => $request->input('malop'),
                'manganh' => $request->input('manganh'),
                'isfirstlogin' => 0
            ]);

            return back()->with('status', "Tạo thành công sinh viên $masv");
        }
        else
        {
            return back()->with('status', "Đã tồn tại sinh viên có mã số $masv");
        }     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function show(Sinhvien $sinhvien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function edit($masv)
    {
        $dataSV = Sinhvien::where('MaSV', $masv)->get();
        $dataNganh = Nganh::all();
        $dataLop = Lop::all();

        return view('admin.sinhvien.suaSV', [
            'dataSV' => $dataSV,
            'dataLop' => $dataLop,
            'dataNganh' => $dataNganh,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $masv)
    {
        //dd($request->all());
        $sv = Sinhvien::where('MaSV', $masv)->update([
            'masv' => $request->input('masv'),
            'tensv' => $request->input('tensv'),
            'dob' => $request->input('dob'),
            'gioitinh' => $request->input('gioitinh'),
            'diachi' => $request->input('diachi'),
            'email' => $request->input('email'),
            'matkhau' => $request->input('matkhau'),
            'malop' => $request->input('malop'),
            'manganh' => $request->input('manganh'),
            'isfirstlogin' => 0
        ]);

        return redirect('/sinhvien')->with('status', "Thay đổi thành công thông tin sinh viên $masv");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function destroy($masv)
    {
        $sv = Sinhvien::where('MaSV', $masv)->delete();

        return redirect('/sinhvien')->with('status', "Xoá thành công sinh viên $masv");
    }
}
