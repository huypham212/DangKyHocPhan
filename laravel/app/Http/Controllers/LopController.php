<?php

namespace App\Http\Controllers;

use App\Models\Lop;
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
        return view('admin.lop', [
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
    public function edit(Lop $lop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lop $lop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lop  $lop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lop $lop)
    {
        //
    }
}