<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\LopHP;
use App\Models\Monhoc;
use App\Models\Giangvien;
use App\Models\SVMH;
use App\Models\DSDK;

class DangKyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masv = SESSION::get('masv');

        $tensv_raw = DB::table('sinhvien')->where('MaSV', $masv)->select('TenSV')->get();
        $tensv = implode(" ", array_column(json_decode($tensv_raw, true), 'TenSV'));

        $lop_raw = DB::table('sinhvien')->where('MaSV', $masv)->select('MaLop')->get();
        $lop = implode(" ", array_column(json_decode($lop_raw, true), 'MaLop'));

        $exist_lophp = DB::table('lop_hp')
                        ->select(array('monhoc.mamh', DB::raw('COUNT(lop_hp.malophp) as soluong')))
                        ->join('monhoc', 'monhoc.mamh', '=', 'lop_hp.mamh')
                        ->groupBy('monhoc.mamh')
                        ->get();
        
        $list_exist_mh = DB::table('ds_dangky')->join('lop_hp', 'lop_hp.malophp', '=', 'ds_dangky.malophp')
                                ->select('lop_hp.mamh')
                                ->where('ds_dangky.masv', '=', $masv)
                                ->get();

        $currentDate = Carbon::now();

        $count_totalLop = DB::table("ds_dangky")->join('lop_hp', 'lop_hp.malophp', '=', 'ds_dangky.malophp')
                                ->select("lop_hp.malophp")
                                ->where("ds_dangky.masv", "=", $masv)
                                ->get();

        switch($currentDate->month)
        {
            case 2:
            case 3:
            case 4:
            case 5:
                $hk = 2;
                $get_year = $currentDate->year - 1;
                $namhoc = $get_year.'-' .$currentDate->year;
                $current_lophp = DB::table("ds_dangky")->join('lop_hp', 'lop_hp.malophp', '=', 'ds_dangky.malophp')
                                ->select("lop_hp.*")
                                ->where("ds_dangky.masv", "=", $masv)
                                ->where("ds_dangky.hocky", "=", 2)
                                ->where("ds_dangky.namhoc", "=", $namhoc)
                                ->get();
                break;
            case 9:
            case 10:
            case 11:
            case 12:
                $hk = 1;
                $get_year = $currentDate->year + 1;
                $namhoc = $currentDate->year.'-' .$get_year;
                $current_lophp = DB::table("ds_dangky")->join('lop_hp', 'lop_hp.malophp', '=', 'ds_dangky.malophp')
                                    ->select("lop_hp.*")
                                    ->where("ds_dangky.masv", "=", $masv)
                                    ->where("ds_dangky.hocky", "=", $hk)
                                    ->where("ds_dangky.namhoc", "=", $namhoc)
                                    ->get();
                break;
            case 1:
                $hk = 1;
                $get_year = $currentDate->year - 1;
                $namhoc = $get_year.'-' .$currentDate->year;
                $current_lophp = DB::table("ds_dangky")->join('lop_hp', 'lop_hp.malophp', '=', 'ds_dangky.malophp')
                                    ->select("lop_hp.*")
                                    ->where("ds_dangky.masv", "=", $masv)
                                    ->where("ds_dangky.hocky", "=", $hk)
                                    ->where("ds_dangky.namhoc", "=", $namhoc)
                                    ->get();
                break;
        }

        $dataLopHP = LopHP::all();
        $dataMH = Monhoc::all();
        $dataGV = Giangvien::all();
        $dataSVMH = SVMH::where('MaSV', $masv)->get();

        //dd($list_exist_mh);

        return view('sinhvien.dangky', [
            'masv' => $masv,
            'tensv' => $tensv,
            'lop' => $lop,
            'hk' => $hk,
            'namhoc' => $namhoc,
            'dataLopHP' => $dataLopHP,
            'dataMH' => $dataMH,
            'dataGV' => $dataGV,
            'dataSVMH' => $dataSVMH,
            'exist_lophp' => $exist_lophp,
            'current_lophp' => $current_lophp,
            'count_totalLop' => count($count_totalLop),
            'count_lophp' => count($current_lophp),
            'list_exist_mh' => $list_exist_mh,
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
        $masv = SESSION::get('masv');
        $malophp = $request->input('malophp');
        $get_mamh = LopHP::where('MaLopHP', $malophp)->select('MaMH')->get();
        $mamh = implode(" ", array_column(json_decode($get_mamh, true), 'MaMH'));

        $check_mh = SVMH::where('masv', '=', $masv)
                        ->where('mamh', '=', $mamh)
                        ->get();

        $currentDate = Carbon::now();

        switch($currentDate->month)
        {
            case 2:
            case 3:
            case 4:
            case 5:
                $hk = 2;
                $get_year = $currentDate->year - 1;
                $namhoc = $get_year.'-' .$currentDate->year;

                break;
            case 9:
            case 10:
            case 11:
            case 12:
                $hk = 1;
                $get_year = $currentDate->year + 1;
                $namhoc = $currentDate->year.'-' .$get_year;
                break;
            case 1:
                $hk = 1;
                $get_year = $currentDate->year - 1;
                $namhoc = $get_year.'-' .$currentDate->year;
                break;
        }

        //dd($masv, $malophp, $mamh);
        if($check_mh == null){
            $dsdk = DSDK::create([
                'masv' => $masv,
                'malophp' => $malophp,
                'hocky' => $hk,
                'namhoc' => $namhoc
            ]);
    
            $svmh = SVMH::create([
                'masv' => $masv,
                'mamh' => $mamh,
                'trangthai' => 'Đang hoàn thành'
            ]);

            return back()->with('status', "Đăng ký thành công vào lớp $malophp");
        }
        else{
            return back()->with('status', "Bạn đã đăng ký lớp cho môn học $mamh");
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $malophp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($malophp)
    {   
        $masv = SESSION::get('masv');
        $get_mamh = LopHP::where('MaLopHP', $malophp)->select('MaMH')->get();
        $mamh = implode(" ", array_column(json_decode($get_mamh, true), 'MaMH'));
        
        $dsdk = DSDK::where('malophp', '=', $malophp)
                    ->where('masv', '=', $masv)
                    ->delete();

        $sv_mh = SVMH::where('masv', '=', $masv)
                    ->where('mamh', '=', $mamh)
                    ->delete();

        return back()->with('status', "Bạn đã huỷ đăng ký lớp $malophp");
    }
}
