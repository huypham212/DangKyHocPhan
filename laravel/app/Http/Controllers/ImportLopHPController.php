<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LopHP;
use App\Models\Monhoc;
use App\Models\Giangvien;
use Illuminate\Support\Facades\DB;
use App\Imports\LopHPsImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportLopHPController extends Controller
{
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

    public function importLopHP(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required',
        ]);

        Excel::import(new LopHPsImport,$request->file('file'));

        return back()->with('status', 'Import thành công các lớp học phần');
    }
}
