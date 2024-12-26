<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index(){
        $pegawais = Pegawai::all();
        return view('pages.pengepul.pegawai.index', compact('pegawais'));
    }

    public function create_pegawai(){
        return view('pages.pengepul.pegawai.create');
    }

    public function store_pegawai(Request $request){
        Pegawai::create([
            'nama'=>$request->nama,
            'no_telepon'=>$request->no_telepon,
            'alamat'=>$request->alamat
        ]);

        return redirect()->route('data-pegawai')->with('success', 'Pegawai berhasil ditambahkan!');
    }

    public function update_pegawai(Pegawai $pegawai){
        return view('pages.pengepul.pegawai.update', compact('pegawai'));
    }

    public function update_pegawai_proses(Request $request, Pegawai $pegawai){
        
        $pegawai->update([
            'id_pegawai'=>$pegawai->id_pegawai,
            'nama'=>$request->nama,
            'no_telepon'=>$request->no_telepon,
            'alamat'=>$request->alamat
        ]);

        return redirect()->route('data-pegawai')->with('success', 'Pegawai berhasil diupdate!');
    }

    public function delete_pegawai(Pegawai $pegawai){
        $pegawai->delete();
        return redirect()->route('data-pegawai')->with('success', 'Pegawai berhasil dihapus!');
    }

}
