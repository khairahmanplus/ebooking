<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bahagian;
use Illuminate\Validation\Rule;
use App\Models\Pengguna;
use Illuminate\Support\Str;

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
                'string',
                'max:100'
            ],
            'no_kad_pengenalan' => [
                'required',
                'size:12',
                'regex:/^[0-9]{6}[0-9]{2}[0-9]{4}$/',
                'unique:pengguna,no_kad_pengenalan'
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
                'max:100',
                'unique:pengguna,emel'
            ],
        ]);

        // Insert Data
        // insert into pengguna (columns) values ()
        Pengguna::create([
            'nama'              => $request->input('nama'),
            'no_kad_pengenalan' => $request->input('no_kad_pengenalan'),
            'id_bahagian'       => $request->input('bahagian'),
            'no_tel'            => $request->input('no_telefon'),
            'emel'              => $request->input('emel'),
        ]);
        // Redirect
        return redirect('/');
    }
}
