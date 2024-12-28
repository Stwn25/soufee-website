<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Permintaan;
use App\Models\Kapasitas;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    //PETANI
    public function index_petani(){
        $id = Auth::user()->id_user;
       $transaksis = Transaksi::where('id_petani', $id)
                   ->with('kapasitas', 'status_transaksis')
                   ->get(); //mengambil permintaan yang dioffer oleh id petani yang login

        return view('pages.petani.transaksi.index', compact('transaksis'));
    }

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

        Transaksi::create([
            'id_petani' => $id,
            'id_kapasitas' => $kapasitas->id_kapasitas,
            'jumlah_permintaan' => $request->jumlah_permintaan,
            'id_status_transaksi' => 1
        ]);


        return redirect('dashboard-petani')->with('success', 'Permintaan berhasil ditambahkan!');

    }

    //PENGEPUL
    public function index_pengepul(){
        $id = Auth::user()->id_user;
        $transaksis = Transaksi::whereHas('kapasitas', function ($query) use ($id) {
                            $query->where('id_user', $id);
                        }) //mengambil permintaan yang dimiliki oleh id pengepul yang login
                        ->with('kapasitas', 'status_transaksis')
                        ->get();

        return view('pages.pengepul.transaksi.index', compact('transaksis'));
    }

    
}
