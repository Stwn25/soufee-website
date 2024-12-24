<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Kapasitas;
use Illuminate\Http\Request;

class KapasitasController extends Controller
{
    public function create_kapasitas(){
        return view('pages.pengepul.kapasitas.create');
    }

    public function store_kapasitas(Request $request){

        $id = Auth::user()->id_user;
        Kapasitas::create([
            'id_user' => $id,
            'kapasitas' => $request->kapasitas,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('dashboard-pengepul')->with('success', 'Kapasitas berhasil ditambahkan!');
    }
}
