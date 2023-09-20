<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $anggota = Db::table('anggota')->get();
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.anggota');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'kode' => 'required',
        'nama' => 'required',
        'jk' => 'required',
        'jurusan' => 'required',
        'telp' => 'required|numeric|min:10',
        'alamat' => 'required',
    ]);

    $query = DB::table('anggota')->insert([
        'kode_anggota' => $request['kode'],
        'nama_anggota' => $request['nama'],
        'jk_anggota' => $request['jk'],
        'jurusan_anggota' => $request['jurusan'],
        'no_telp_anggota' => $request['telp'],
        'alamat_anggota' => $request['alamat'],
    ]);
    
    return redirect()->route('anggota.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $anggota = DB::table('anggota')->where('id', $id)->get();
        return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $anggota = DB::table('anggota')->where('id', $id)->get();
        return view('anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'jurusan' => 'required',
            'telp' => 'required|numeric|min:10',
            'alamat' => 'required',
        ]);

        $query = DB::table('anggota')->where('id', $id)->update([
            'kode_anggota' => $request['kode'],
            'nama_anggota' => $request['nama'],
            'jk_anggota' => $request['jk'],
            'jurusan_anggota' => $request['jurusan'],
            'no_telp_anggota' => $request['telp'],
            'alamat_anggota' => $request['alamat'],
        ]);
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $anggota = DB::table('anggota')->where('id', $id)->delete();
        return redirect()->route('anggota.index');
    }
}