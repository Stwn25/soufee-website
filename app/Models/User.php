<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function kapasitas(){
        return $this->hasMany(Kapasitas::class, 'id_user', 'id_user');
    }

    public function pegawais(){
        return $this->hasMany(Pegawai::class, 'id_user', 'id_user');  
    }

    public function transaksis(){
        return $this->hasMany(Transaksi::class, 'id_user', 'id_user');
    }

    // public function namaFungsi()
    // {
    //     return $this->belongsto/hasMany/hasOne(ModelYangBerelasi::class, 'foreign_key', 'primary_key');
    // }
}
