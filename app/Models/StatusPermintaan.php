<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPermintaan extends Model
{
    /** @use HasFactory<\Database\Factories\StatusPermintaanFactory> */
    use HasFactory;

    protected $table = 'status_permintaans';
    protected $primaryKey = 'id_status_permintaan';

    public $timestamps = false;

    protected $fillable = [
        'status_permintaan',
    ];

    public function permintaans(){
        return $this->hasMany(Permintaan::class, 'id_status_permintaan', 'id_status_permintaan');
    }
}
