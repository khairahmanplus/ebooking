<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahagian;
use Illuminate\Validation\Rule;

class DaftarController extends Controller
{
    public function paparBorangDaftar()
    {
        // SELECT * FROM bahagian
        // $senaraiBahagian = Bahagian::get();

        return view('auth.daftar', [
            'senaraiBahagian' => Bahagian::get()
        ]);
    }

    public function daftar(Request $request)
    {
        // Validation
        $request->validate([
            'nama' => [
                'required'
            ],
            'no_kad_pengenalan' => [
                'required',
            ],
            'bahagian' => [
                'required',
                Rule::in(Bahagian::pluck('id'))
            ],
            'no_telefon' => [
                'required'
            ],
            'emel' => [
                'required',
                'email'
            ],
        ]);

        // Insert Data
        // Redirect
    }
}
