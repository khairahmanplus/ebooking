<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogKeluarController extends Controller
{
    public function logKeluar()
    {
        // Logout (Buang session)
        Auth::logout();
        // Redirect ke laman hadapan
        return redirect('/');
    }
}
