<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LogMasukController extends Controller
{
    /**
     * Memaparkan borang log masuk bagi pengguna luar.
     *
     * @return \Illuminate\Facades\Support\View
     */
    public function paparBorangLogMasuk()
    {
        return view('auth.log-masuk');
    }

    public function logMasuk(Request $request)
    {
        // 1. Validation
        $request->validate([
            'no_kad_pengenalan' => [
                'required',
                'exists:pengguna,no_kad_pengenalan'
            ],
            'kata_laluan' => [
                'required'
            ],
        ]);

        // 2. Dapatkan pengguna daripada pangkalan data
        // SELECT * 
        // FROM pengguna 
        // WHERE no_kad_pengenalan = 
        $pengguna = Pengguna::
        whereNoKadPengenalan($request->input('no_kad_pengenalan'))
        ->first();

        // 3. Semak jika kata laluan adalah sama dengan yg disimpan
        // pada pangkalan data.
        // Jika tak sama, kembali kepada halaman log masuk
        if (! Hash::check($request->input('kata_laluan'), $pengguna->kata_laluan)) {
            throw ValidationException::withMessages([
                'no_kad_pengenalan' => 'Credentials does not match.'
            ]);
        }
        
        // 4. Login pengguna
        Auth::login($pengguna);
        
        // 5. Redirect ke laman utama
        return redirect()->route('laman-utama');
    }
}
