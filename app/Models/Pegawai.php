<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    /** @use HasFactory<\Database\Factories\PegawaiFactory> */
    use HasFactory;

    protected $table = 'pegawais';
    protected $primaryKey = 'id_pegawai';

    protected $fillable = [
        'id_user',
        'nama',
        'no_telepon',
        'alamat',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
