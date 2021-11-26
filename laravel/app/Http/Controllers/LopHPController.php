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

        return view('admin.lophp', [
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
     * @param  \App\Models\LopHP  $lopHP
     * @return \Illuminate\Http\Response
     */
    public function show(LopHP $lopHP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LopHP  $lopHP
     * @return \Illuminate\Http\Response
     */
    public function edit(LopHP $lopHP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LopHP  $lopHP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LopHP $lopHP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LopHP  $lopHP
     * @return \Illuminate\Http\Response
     */
    public function destroy(LopHP $lopHP)
    {
        //
    }
}
