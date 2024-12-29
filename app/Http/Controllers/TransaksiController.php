<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Permintaan;
use App\Models\Kapasitas;
use App\Models\Transaksi;
use App\Models\Pegawai;

class TransaksiController extends Controller
{
    //PETANI

    //Halaman Transaksi
    public function index_petani(){
        $id = Auth::user()->id_user;
       $transaksis_pending = Transaksi::where('id_petani', $id)
                   ->with('kapasitas', 'status_transaksis')
                   ->where('id_status_transaksi', 1)
                   ->get(); //mengambil permintaan yang dioffer oleh id petani yang login
      
        $transaksis_proses = Transaksi::where('id_petani', $id)
                   ->with('kapasitas', 'status_transaksis')
                   ->where('id_status_transaksi', 2)
                   ->get(); //mengambil permintaan yang dioffer oleh id petani yang login

        return view('pages.petani.transaksi.index', compact('transaksis_pending', 'transaksis_proses'));
    }

    //Halaman Riwayat
    public function riwayat_transaksi_petani(){
        $id = Auth::user()->id_user;
        $transaksis = Transaksi::where('id_petani', $id)
                   ->with('kapasitas', 'status_transaksis')
                   ->where('id_status_transaksi', 3)
                   ->get(); //mengambil permintaan yang dioffer oleh id petani yang login
        return view('pages.petani.transaksi.riwayat', compact('transaksis'));
    }

    //Halaman Petani Membuat Permintaan
    public function create_permintaan(Kapasitas $kapasitas)
    {   
        return view('pages.petani.tawaran.create', compact('kapasitas'));
    }

    //Proses Store Permintaan
    public function store_permintaan(Request $request, Kapasitas $kapasitas){
        $id = Auth::user()->id_user;

        if($request->jumlah_permintaan > $kapasitas->kapasitas_terbaru or $request->jumlah_permintaan < 0){
            return redirect()->back()->with('error', 'Permintaan tidak boleh melebihi kapasitas!');
        } 

        else{
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
                'total_harga' => $request->jumlah_permintaan * $kapasitas->harga_per_kg,
                'id_status_transaksi' => 1
            ]);
    
    
            return redirect('dashboard-petani')->with('success', 'Permintaan berhasil ditambahkan!');
        }
    }

    //Proses Delete Permintaan
    public function delete_permintaan(Transaksi $transaksi){
        $transaksi->delete();

        $kapasitas = $transaksi->kapasitas;

        $kapasitas->update([
            'kapasitas_terbaru' => $transaksi->kapasitas->kapasitas_terbaru += $transaksi->jumlah_permintaan
        ]);

        return redirect('transaksi-petani')->with('success', 'Permintaan berhasil dihapus!');
    }



    
    //PENGEPUL

    //Halaman Transaksi Pengepul
    public function index_pengepul(){
        $id = Auth::user()->id_user;
        $transaksis_pending = Transaksi::whereHas('kapasitas', function ($query) use ($id) {
                            $query->where('id_user', $id);
                        }) //mengambil permintaan yang dimiliki oleh id pengepul yang login
                        ->where('id_status_transaksi', 1)
                        ->with('kapasitas', 'status_transaksis')
                        ->get();

        $transaksis_proses = Transaksi::whereHas('kapasitas', function ($query) use ($id) {
                                        $query->where('id_user', $id);
                                    }) //mengambil permintaan yang dimiliki oleh id pengepul yang login
                                    ->where('id_status_transaksi', 2)
                                    ->with('kapasitas', 'status_transaksis')
                                    ->get();

        return view('pages.pengepul.transaksi.index', compact('transaksis_pending', 'transaksis_proses'));
    }

    //Halaman Riwayat
    public function riwayat_transaksi_pengepul(){
        $id = Auth::user()->id_user;
        $transaksis = Transaksi::whereHas('kapasitas', function ($query) use ($id) {
                            $query->where('id_user', $id);
                        }) //mengambil permintaan yang dimiliki oleh id pengepul yang login
                        ->where('id_status_transaksi', 3)
                        ->with('kapasitas', 'status_transaksis')
                        ->get();
        return view('pages.pengepul.transaksi.riwayat', compact('transaksis'));
    }

    //Halaman Terima Permintaan dengan mengatur jadwal dan pegawai penjemputan
    public function terima_permintaan(Transaksi $transaksi){
        $id = Auth::user()->id_user;
        $pegawais = Pegawai::where('id_user', $id)->get();

        return view ('pages.pengepul.transaksi.terimapermintaan', compact('transaksi', 'pegawais'));
    }

    //Proses Terima Permintaan
    public function terima_permintaan_proses(Request $request, Transaksi $transaksi){

        $transaksi->update([
            'id_transaksi' => $transaksi->id_transaksi,
            'id_pegawai' => $request->id_pegawai,
            'tanggal_penjemputan' => $request->tanggal_penjemputan,
            'id_status_transaksi' => 2
        ]);

        return redirect('transaksi-pengepul')->with('success', 'Permintaan berhasil diterima!');
    }

    
}
