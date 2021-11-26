<?php

namespace App\Http\Controllers;

use App\Models\SVMH;
use App\Models\Sinhvien;
use App\Models\Monhoc;
use Illuminate\Http\Request;

class SVMHController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSVMH = SVMH::all();
        $dataSV = Sinhvien::all();
        $dataMH = Monhoc::all();
        return view('admin.svmh', [
            'dataSVMH' => $dataSVMH,
            'dataSV' => $dataSV,
            'dataMH' => $dataMH,
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
     * @param  \App\Models\SVMH  $sVMH
     * @return \Illuminate\Http\Response
     */
    public function show(SVMH $sVMH)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SVMH  $sVMH
     * @return \Illuminate\Http\Response
     */
    public function edit(SVMH $sVMH)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SVMH  $sVMH
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SVMH $sVMH)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SVMH  $sVMH
     * @return \Illuminate\Http\Response
     */
    public function destroy(SVMH $sVMH)
    {
        //
    }
}
