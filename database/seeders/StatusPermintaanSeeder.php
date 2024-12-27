<?php

namespace Database\Seeders;

use App\Models\StatusPermintaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusPermintaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusPermintaan::factory()->create(['status_permintaan' => 'Pending']);
        StatusPermintaan::factory()->create(['status_permintaan' => 'Accepted']);
        StatusPermintaan::factory()->create(['status_permintaan' => 'Rejected']);
    }
}
