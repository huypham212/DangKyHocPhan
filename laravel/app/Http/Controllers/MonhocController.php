<?php

namespace App\Http\Controllers;

use App\Models\Monhoc;
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
        $data = Monhoc::all();
        return view('admin.monhoc', [
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
    public function edit(Monhoc $monhoc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monhoc  $monhoc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monhoc $monhoc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monhoc  $monhoc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monhoc $monhoc)
    {
        //
    }
}
