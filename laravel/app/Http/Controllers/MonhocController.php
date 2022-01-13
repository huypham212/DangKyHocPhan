<?php

namespace App\Http\Controllers;

use App\Models\Monhoc;
use App\Models\Nganh;
use Illuminate\Http\Request;

class MonhocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataMH = Monhoc::all();
        return view('admin.monhoc.danhsachMH', [
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
        $dataNganh = Nganh::all();

        return view('admin.monhoc.themMH', [
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
        $mamh = $request->input('mamh');
        //dd($request->all());
        $mh = Monhoc::create([
            'mamh' => $request->input('mamh'),
            'tenmh' => $request->input('tenmh'),
            'sotc' => $request->input('sotc'),
            'hocphi' => $request->input('hocphi'),
            'manganh' => $request->input('manganh')
        ]);

        return back()->with('status', "Tạo thành công môn học có mã số $mamh");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monhoc  $monhoc
     * @return \Illuminate\Http\Response
     */
    public function show(Monhoc $monhoc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monhoc  $monhoc
     * @return \Illuminate\Http\Response
     */
    public function edit($mamh)
    {
        $dataMH = Monhoc::where('MaMH', $mamh)->get();
        $dataNganh = Nganh::all();

        return view('admin.monhoc.suaMH', [
            'dataMH' => $dataMH,
            'dataNganh' => $dataNganh
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monhoc  $monhoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mamh)
    {
        //dd($request->all());
        $mh = Monhoc::where('MaMH', $mamh)->update([
            'mamh' => $request->input('mamh'),
            'tenmh' => $request->input('tenmh'),
            'sotc' => $request->input('sotc'),
            'hocphi' => $request->input('hocphi'),
            'manganh' => $request->input('manganh')
        ]);

        return redirect('/monhoc')->with('status', "Thay đổi thành công thông tin môn học $mamh");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monhoc  $monhoc
     * @return \Illuminate\Http\Response
     */
    public function destroy($mamh)
    {
        $mh = Monhoc::where('MaMH', $mamh)->delete();

        return redirect('/monhoc')->with('status', "Xoá thành công môn học $mamh");
    }
}
