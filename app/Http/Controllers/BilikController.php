<?php

namespace App\Http\Controllers;

use App\Models\Bahagian;
use App\Models\Bilik;
use Illuminate\Http\Request;

class BilikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bilik.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $senaraiBahagian = Bahagian::orderBy('nama', 'desc')->get();

        return view('bilik.create', [
            'senaraiBahagian' => $senaraiBahagian
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'nama' => [
                'required',
                'string',
                'max:255'
            ],
            'bahagian' => [
                'required',
            ]
        ]);
        
        // Masukkan data ke dalam table bilik
        // INSERT INTO bilik (nama, id_bahagian, id_pengguna) VALUES ()
        Bilik::create([
            'nama'          => $request->input('bilik'),
            'id_bahagian'   => $request->input('bahagian'),
            'id_pengguna'   => auth()->id()
        ]);

        // Redirect ke halaman senarai bilik
        redirect()->route('bilik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
