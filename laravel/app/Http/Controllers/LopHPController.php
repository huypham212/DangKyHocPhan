<?php

namespace App\Http\Controllers;

use App\Models\LopHP;
use App\Models\Monhoc;
use App\Models\Giangvien;
use Illuminate\Http\Request;

class LopHPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataLopHP = LopHP::all();
        $dataMH = Monhoc::all();
        $dataGV = Giangvien::all();

        return view('admin.lophp.danhsachLopHP', [
            'dataLopHP' => $dataLopHP,
            'dataMH' => $dataMH,
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
        $dataMH = Monhoc::all();
        $dataGV = Giangvien::all();

        return view('admin.lophp.themLopHP', [
            'dataMH' => $dataMH,
            'dataGV' => $dataGV,
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
        $lophp = LopHP::create([
            'malophp' => $request->input('malophp'),
            'tenlophp' => $request->input('tenlophp'),
            'siso' => $request->input('siso'),
            'thoigian' => $request->input('thoigian'),
            'diadiem' => $request->input('diadiem'),
            'magv' => $request->input('magv'),
            'mamh' => $request->input('mamh')
        ]);

        return redirect('/lophp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LopHP  $lopHP
     * @return \Illuminate\Http\Response
     */
    public function show($malophp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LopHP  $lopHP
     * @return \Illuminate\Http\Response
     */
    public function edit($malophp)
    {
        $dataLopHP = LopHP::where('MaLopHP', $malophp)->get();
        $dataMH = Monhoc::all();
        $dataGV = Giangvien::all();

        return view('admin.lophp.suaLopHP', [
            'dataLopHP' => $dataLopHP,
            'dataMH' => $dataMH,
            'dataGV' => $dataGV
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LopHP  $lopHP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $malophp)
    {
        $lophp = LopHP::where('MaLopHP', $malophp)->update([
            'malophp' => $request->input('malophp'),
            'tenlophp' => $request->input('tenlophp'),
            'siso' => $request->input('siso'),
            'thoigian' => $request->input('thoigian'),
            'diadiem' => $request->input('diadiem'),
            'magv' => $request->input('magv'),
            'mamh' => $request->input('mamh')
        ]);

        return redirect('/lophp')->with('status', "Thay đổi thành công thông tin môn học $malophp");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LopHP  $lopHP
     * @return \Illuminate\Http\Response
     */
    public function destroy($malophp)
    {
        $lophp = LopHP::where('MaLopHP', $malophp)->delete();

        return redirect('/lophp')->with('status', "Xoá thành công môn học $malophp");
    }
}
