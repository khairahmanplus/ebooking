<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function paparBorangDaftar()
    {
        return view('auth.daftar');
    }
}
