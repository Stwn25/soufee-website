<?php

namespace App\Http\Controllers;

use App\Models\JenisKopi;
use Illuminate\Support\Facades\Auth;
use App\Models\Kapasitas;
use Illuminate\Http\Request;

class KapasitasController extends Controller
{
    public function create_kapasitas(){
        $jeniskopi = JenisKopi::all();

        return view('pages.pengepul.kapasitas.create', compact('jeniskopi'));
    }

    public function store_kapasitas(Request $request){

        $id = Auth::user()->id_user;
        Kapasitas::create([
            'id_user' => $id,
            'id_jenis_kopi' => $request->id_jenis_kopi,
            'kapasitas' => $request->kapasitas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('dashboard-pengepul')->with('success', 'Kapasitas berhasil ditambahkan!');
    }
}
