<?php

namespace App\Http\Controllers;

use App\Models\Lop;
use App\Models\Khoa;
use Illuminate\Http\Request;

class LopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lop::all();
        return view('admin.lop.danhsachLop', [
            'data' => $data,
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
        return view('admin.lop.themLop', [
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
        $lop = Lop::create([
            'malop' => $request->input('malop'),
            'tenlop' => $request->input('tenlop'),
            'nienkhoa' => $request->input('nienkhoa'),
            'makhoa' => $request->input('makhoa')
        ]);

        return redirect('/lop');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function show(Lop $lop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function edit($malop)
    {
        $dataKhoa = Khoa::all();
        $dataLop = Lop::where('MaLop', $malop)->get();

        return view('admin.lop.suaLop', [
            'dataLop' => $dataLop,
            'dataKhoa' => $dataKhoa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $malop)
    {
        $lop = Lop::where('MaLop', $malop)->update([
            'malop' => $request->input('magv'),
            'tenlop' => $request->input('tenlop'),
            'nienkhoa' => $request->input('nienkhoa'),
            'makhoa' => $request->input('makhoa')
        ]);

        return redirect('/lop')->with('status', "Thay đổi thành công thông tin môn học $malop");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function destroy($malop)
    {
        $lop = Lop::where('MaLop', $malop)->delete();

        return redirect('/lop')->with('status', "Xoá thành công môn học $malop");
    }
}
