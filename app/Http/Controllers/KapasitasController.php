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
            'harga_per_kg' => $request->harga_per_kg,
            'id_jenis_kopi' => $request->id_jenis_kopi,
            'kapasitas_maksimum' => $request->kapasitas,
            'kapasitas_terbaru' => $request->kapasitas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('dashboard-pengepul')->with('success', 'Kapasitas berhasil ditambahkan!');
    }

    public function update_kapasitas(Kapasitas $kapasitas){
        $jeniskopi = JenisKopi::all();
        return view ('pages.pengepul.kapasitas.update', compact('kapasitas', 'jeniskopi'));
    }

    public function update_kapasitas_proses(Request $request, Kapasitas $kapasitas){
        
        $kapasitas->update([
            'id_kapasitas' => $kapasitas->id_kapasitas,
            'harga_per_kg' => $request->harga_per_kg,
            'id_jenis_kopi' => $request->id_jenis_kopi,
            'kapasitas_maksimum' => $request->kapasitas_maksimum,
            'kapasitas_terbaru' => ($request->kapasitas_maksimum - $kapasitas->kapasitas_maksimum) + $kapasitas->kapasitas_terbaru,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('dashboard-pengepul')->with('success', 'Kapasitas berhasil diupdate!');
    }

    public function delete_kapasitas(Kapasitas $kapasitas){
        $kapasitas->delete();
        return redirect()->route('dashboard-pengepul')->with('success', 'Kapasitas berhasil dihapus!');
    }
}
