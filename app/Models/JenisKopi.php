<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisKopi extends Model
{
    use HasFactory;

    protected $table = 'jenis_kopis';
    protected $primarykey = 'id_jenis_kopi';
    
    protected $fillable = [
        'nama_jenis',
    ];

    public function kapasitas()
    {
        return $this->hasMany(Kapasitas::class, 'id_jenis_kopi', 'id_jenis_kopi');
    }
}
