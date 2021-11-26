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
        $dataKhoa = Khoa::all();
        $dataGV = Giangvien::all();
        return view('admin.giangvien', [
            'dataGV' => $dataGV,
            'dataKhoa' => $dataKhoa,
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
        //
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
    public function edit(Giangvien $giangvien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Giangvien  $giangvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Giangvien $giangvien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Giangvien  $giangvien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Giangvien $giangvien)
    {
        //
    }
}
