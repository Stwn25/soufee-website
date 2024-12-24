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
        'kapasitas',
        'deskripsi',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}
