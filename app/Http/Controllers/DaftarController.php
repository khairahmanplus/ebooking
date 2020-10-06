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
                'required',
                'alpha',
                'max:100'
            ],
            'no_kad_pengenalan' => [
                'required',
                'size:12',
                'regex:/^[0-9]{6}[0-9]{2}[0-9]{4}$/'
            ],
            'bahagian' => [
                'required',
                Rule::in(Bahagian::pluck('id'))
            ],
            'no_telefon' => [
                'required',
                'max:12'
            ],
            'emel' => [
                'required',
                'email',
                'max:100'
            ],
        ]);

        // Insert Data
        // Redirect
    }
}
