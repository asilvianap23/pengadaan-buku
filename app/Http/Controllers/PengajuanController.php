<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class PengajuanController extends Controller
{
    public function create()
    {
        return view('pengajuans');
    }
    
    public function store(Request $request)
    {
        // dd($request->all()); // Menampilkan semua data yang dikirim untuk debugging
        //validasi input
        $validated = $request->validate([
            'prodi' => 'required',
            'judul' => 'required',
            'edisi' => 'required',
            'penerbit' => 'required',
            'author' => 'required',
            'tahun' => 'required',
            'eksemplar' => 'required|integer',

        ]);
        Pengajuan::create($validated);
        
        return redirect()->route('pengajuan.create')->with('success','Pengajuan berhasil disimpan!');
    
    }

    
}
