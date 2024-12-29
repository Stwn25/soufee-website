<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kapasitas extends Model
{
    use HasFactory;

    protected $table = 'kapasitass';
    protected $primaryKey = 'id_kapasitas';

    protected $fillable = [
        'id_user',
        'harga_per_kg',
        'id_jenis_kopi',
        'kapasitas_maksimum',
        'kapasitas_terbaru',
        'deskripsi',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function jenis_kopis(){
        return $this->belongsTo(JenisKopi::class, 'id_jenis_kopi', 'id_jenis_kopi'); //
    }

    public function transaksis(){
        return $this->hasMany(Transaksi::class, 'id_kapasitas', 'id_kapasitas');
    }

    // public function namaFungsi()
    // {
    //     return $this->belongsto/hasMany/hasOne(ModelYangBerelasi::class, 'foreign_key', 'primary_key');
    // }
}
