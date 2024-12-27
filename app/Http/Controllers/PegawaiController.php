<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    public function index(){
        $id = Auth::user()->id_user;
        $pegawais = Pegawai::where('id_user', $id)->get();
        return view('pages.pengepul.pegawai.index', compact('pegawais'));
    }

    public function create_pegawai(){
        return view('pages.pengepul.pegawai.create');
    }

    public function store_pegawai(Request $request){
        $id = Auth::user()->id_user;

        Pegawai::create([
            'id_user'=>$id,
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
        $id = Auth::user()->id_user;

        $pegawai->update([
            'id_pegawai'=>$pegawai->id_pegawai,
            'id_user'=>$id,
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
