<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    
    use HasFactory;

    protected $table = 'permintaans';
    protected $primaryKey = 'id_permintaan';

    protected $fillable = [
        'id_user',
        'id_kapasitas',
        'jumlah_permintaan',
        'id_status_permintaan',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }

    public function kapasitas(){
        return $this->belongsTo(Kapasitas::class, 'id_kapasitas', 'id_kapasitas');
    }

    public function status_permintaans(){
        return $this->belongsTo(StatusPermintaan::class, 'id_status_permintaan', 'id_status_permintaan');
    }
}
