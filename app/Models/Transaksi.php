<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
        'id_petani',
        'id_kapasitas',
        'jumlah_permintaan',
        'total_harga',
        'tanggal_penjemputan',
        'id_pembayaran',
        'id_pegawai',
        'id_status_transaksi',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'id_petani', 'id_user');
    }

    public function kapasitas(){
        return $this->belongsTo(Kapasitas::class, 'id_kapasitas', 'id_kapasitas');
    }

    public function pegawais(){
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id_pegawai');
    }

    public function status_transaksis(){
        return $this->belongsTo(StatusTransaksi::class, 'id_status_transaksi', 'id_status_transaksi');
    }

    public function  pembayarans(){
        return $this->belongsTo                                 (Pembayaran::class, 'id_pembayaran', 'id_pembayaran');
    }
}
