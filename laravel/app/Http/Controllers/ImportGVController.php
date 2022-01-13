<?php

namespace App\Http\Controllers;

use App\Models\Giangvien;
use App\Models\Khoa;
use Illuminate\Http\Request;
use App\Imports\GiangviensImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportGVController extends Controller
{
    public function index()
    {
        $dataKhoa = Khoa::all();
        return view('admin.giangvien.themGV', [
            'dataKhoa' => $dataKhoa
        ]);
    }

    public function importGV(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required',
        ]);

        Excel::import(new GiangviensImport, $request->file('file'));

        return back();
    }
}
