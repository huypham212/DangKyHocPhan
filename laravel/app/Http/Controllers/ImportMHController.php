<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monhoc;
use App\Models\Nganh;
use App\Imports\MonhocsImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportMHController extends Controller
{
    public function index()
    {
        $dataMH = Monhoc::all();
        return view('admin.monhoc.danhsachMH', [
            'dataMH' => $dataMH,
            'index' => 1
        ]);
    }

    public function importMH(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required',
        ]);

        $res = Excel::import(new MonhocsImport, $request->file('file'));
        
        return back()->with('status', "Import dữ liệu thành công!");
    }
}
