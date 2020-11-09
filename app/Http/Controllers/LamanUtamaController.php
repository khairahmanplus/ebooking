<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;

class LamanUtamaController extends Controller
{
    public function lamanUtama()
    {
        $senaraiAcara = Acara::get()->map(function ($acara) {
            return [
                'title' => $acara->nama,
                'start' => $acara->senaraiButiranAcara->first()->tarikh
            ];
        });

        return view('laman-utama', [
            'senaraiAcara' => $senaraiAcara
        ]);
    }
}
