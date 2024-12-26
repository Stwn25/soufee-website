<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\JenisKopi;   
use Illuminate\Database\Seeder;

class JenisKopiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate data menggunakan factory
        JenisKopi::factory()->create(['nama_jenis' => 'Torabika']);
        JenisKopi::factory()->create(['nama_jenis' => 'Robusta']);
    }
}
