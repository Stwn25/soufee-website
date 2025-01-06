<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::factory()->create(['id_user'=>1, 'nama' => 'Pegawai 1', 'no_telepon' => '1234567890', 'alamat' => 'Jl. Pegawai 1']);
    }
}
