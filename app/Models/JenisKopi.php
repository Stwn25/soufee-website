<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKopi extends Model
{
    use HasFactory;

    protected $table = 'jenis_kopis';
    protected $primarykey = 'id_jenis_kopi';
    
    public $timestamps = false; //menonaktirkan timestamps yang secara otomatis diisi oleh laravel

    protected $fillable = [
        'nama_jenis',
    ];

    public function kapasitas()
    {
        return $this->hasMany(Kapasitas::class, 'id_jenis_kopi', 'id_jenis_kopi');
    }
}
