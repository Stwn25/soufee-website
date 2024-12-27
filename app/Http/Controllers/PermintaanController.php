<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use App\Models\Kapasitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PermintaanController extends Controller
{
    public function create_permintaan(Kapasitas $kapasitas)
    {
        
        return view('pages.petani.tawaran.create', compact('kapasitas'));
    }

    public function store_permintaan(Request $request, Kapasitas $kapasitas){
        $id = Auth::user()->id_user;

        $kapasitas->update([
            'id_kapasitas' => $kapasitas->id_kapasitas,
            'id_jenis_kopi' => $kapasitas->id_jenis_kopi,
            'kapasitas_maksimum' => $kapasitas->kapasitas_maksimum,
            'kapasitas_terbaru' => ($kapasitas->kapasitas_terbaru - $request->jumlah_permintaan),
            'deskripsi' => $kapasitas->deskripsi,
        ]);
        
        Permintaan::create([
            'id_user' => $id,
            'id_kapasitas' => $kapasitas->id_kapasitas,
            'jumlah_permintaan' => $request->jumlah_permintaan,
            'id_status_permintaan' => 1
        ]);


        return redirect('dashboard-petani')->with('success', 'Permintaan berhasil ditambahkan!');

    }
}
