<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\LopHP;
use App\Models\Monhoc;
use App\Models\Giangvien;
use App\Models\SVMH;
use App\Models\DSDK;

class DangKyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masv = SESSION::get('masv');

        $tensv_raw = DB::table('sinhvien')->where('MaSV', $masv)->select('TenSV')->get();
        $tensv = implode(" ", array_column(json_decode($tensv_raw, true), 'TenSV'));

        $lop_raw = DB::table('sinhvien')->where('MaSV', $masv)->select('MaLop')->get();
        $lop = implode(" ", array_column(json_decode($lop_raw, true), 'MaLop'));

        $dataLopHP = LopHP::all();
        $dataMH = Monhoc::all();
        $dataGV = Giangvien::all();
        $dataSVMH = SVMH::where('MaSV', $masv)->get(); 

        //dd($dataMH, $dataSVMH);

        return view('sinhvien.dangky', [
            'masv' => $masv,
            'tensv' => $tensv,
            'lop' => $lop,
            'dataLopHP' => $dataLopHP,
            'dataMH' => $dataMH,
            'dataGV' => $dataGV,
            'dataSVMH' => $dataSVMH,
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masv = SESSION::get('masv');
        $malophp = $request->input('malophp');
        $get_mamh = LopHP::where('MaLopHP', $malophp)->select('MaMH')->get();
        $mamh = implode(" ", array_column(json_decode($get_mamh, true), 'MaMH'));
        
        //dd($masv, $malophp, $mamh);
        $dsdk = DSDK::create([
            'masv' => $masv,
            'malophp' => $malophp,
            'hocky' => 1,
            'namhoc' => '2018-2019'
        ]);

        $svmh = SVMH::create([
            'masv' => $masv,
            'mamh' => $mamh,
            'trangthai' => 'Đang hoàn thành'
        ]);
        
        return redirect('/dangky');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
