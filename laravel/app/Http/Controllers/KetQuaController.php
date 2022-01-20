<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class KetQuaController extends Controller
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

        $monhoc = DB::table('monhoc')->select('*')->get();

        $giangvien = DB::table('giangvien')->select('*')->get();

        $totalLopHP = DB::table("ds_dangky")->join('lop_hp', 'lop_hp.malophp', '=', 'ds_dangky.malophp')
                                ->select("*")
                                ->where("ds_dangky.masv", "=", $masv)
                                ->get();

        $getNamHoc = DB::table("ds_dangky")
                        ->select("namhoc")->distinct()
                        ->where("masv", "=", $masv)
                        ->get();

        //dd($monhoc);

        return view('sinhvien.ketqua', [
            'masv' => $masv,
            'tensv' => $tensv,
            'lop' => $lop,
            'monhoc' => $monhoc,
            'giangvien' => $giangvien,
            'count_totalLop' => count($totalLopHP),
            'namhoc' => $getNamHoc,
            'totalLopHP' => $totalLopHP,
            'dataIndex' => 1,
            'collapseIndex' => 0
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
        //
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
