<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasswordController extends Controller
{
    public function index()
    {
        return view('password');
    }

    public function valid_password(Request $request)
    {
        
    }
}
