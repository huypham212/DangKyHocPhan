<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SinhviensImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Sinhvien;
use App\Models\Lop;
use App\Models\Nganh;
use Illuminate\Support\Facades\DB;


class ImportSVController extends Controller
{
    public function index(){
        $dataNganh = Nganh::all();
        $dataLop = Lop::all();
        
        return view('admin.sinhvien.themSV', [
            'dataLop' => $dataLop,
            'dataNganh' => $dataNganh
        ]);
    }

    public function import(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required',
        ]);
        
        Excel::import(new SinhviensImport,$request->file('file'));

        return back();
    }
}
