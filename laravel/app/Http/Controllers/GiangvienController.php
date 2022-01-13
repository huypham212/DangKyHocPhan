<?php

namespace App\Http\Controllers;

use App\Models\Giangvien;
use App\Models\Khoa;
use Illuminate\Http\Request;

class GiangvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataGV = Giangvien::all();
        return view('admin.giangvien.danhsachGV', [
            'dataGV' => $dataGV,
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
        $dataKhoa = Khoa::all();
        return view('admin.giangvien.themGV', [
            'dataKhoa' => $dataKhoa
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
        $gv = Giangvien::create([
            'magv' => $request->input('magv'),
            'tengv' => $request->input('hoten'),
            'gioitinh' => $request->input('gioitinh'),
            'email' => $request->input('email'),
            'makhoa' => $request->input('makhoa')
        ]);

        return redirect('/giangvien');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Giangvien  $giangvien
     * @return \Illuminate\Http\Response
     */
    public function show(Giangvien $giangvien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Giangvien  $giangvien
     * @return \Illuminate\Http\Response
     */
    public function edit($magv)
    {
        $dataKhoa = Khoa::all();
        $dataGV = Giangvien::where('MaGV', $magv)->get();
        return view('admin.giangvien.suaGV', [
            'dataGV' => $dataGV,
            'dataKhoa' => $dataKhoa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Giangvien  $giangvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $magv)
    {
        $gv = Giangvien::where('MaGV', $magv)->create([
            'magv' => $request->input('magv'),
            'tengv' => $request->input('hoten'),
            'gioitinh' => $request->input('gioitinh'),
            'email' => $request->input('email'),
            'makhoa' => $request->input('makhoa')
        ]);

        return redirect('/giangvien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Giangvien  $giangvien
     * @return \Illuminate\Http\Response
     */
    public function destroy($magv)
    {
        $sv = Giangvien::where('MaGV', $magv)->delete();

        return redirect('/giangvien');
    }
}
