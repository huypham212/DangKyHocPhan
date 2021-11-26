<?php

namespace App\Http\Controllers;

use App\Models\Sinhvien;
use App\Models\Lop;
use App\Models\Nganh;
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
        $dataNganh = Nganh::all();
        $dataSV = Sinhvien::all();
        $dataLop = Lop::all();
        return view('admin.sinhvien', [
            'dataSV' => $dataSV,
            'dataLop' => $dataLop,
            'dataNganh' => $dataNganh,
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $sv = Sinhvien::create([
            'masv' => $request->input('addmasv'),
            'tensv' => $request->input('addtensv'),
            'dob' => $request->input('adddob'),
            'gioitinh' => $request->input('addgioitinh'),
            'diachi' => $request->input('adddiachi'),
            'email' => $request->input('addemail'),
            'matkhau' => $request->input('addmatkhau'),
            'malop' => $request->input('addmalop'),
            'manganh' => $request->input('addmanganh'),
            'isfirstlogin' => 0
        ]);

        return redirect('/sinhvien');
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
    public function edit(Sinhvien $sinhvien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sinhvien $sinhvien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sinhvien $sinhvien)
    {
        //
    }
}
