<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
