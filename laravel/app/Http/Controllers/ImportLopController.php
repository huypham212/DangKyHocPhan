<?php

namespace App\Http\Controllers;

use App\Imports\LopsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Lop;
use App\Models\Khoa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ImportLopController extends Controller
{
    public function index()
    {
        $data = Lop::all();
        return view('admin.lop.danhsachLop', [
            'data' => $data,
            'index' => 1
        ]);
    }

    public function importLop(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required',
        ]);

        Excel::import(new LopsImport, $request->file('file'));

        return back()->with('status', 'Import thành công các lớp');
    }
}
