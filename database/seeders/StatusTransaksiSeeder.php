<?php

namespace Database\Seeders;

use App\Models\StatusTransaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StatusTransaksi::factory()->create(['status_transaksi' => 'Pending']);
        StatusTransaksi::factory()->create(['status_transaksi' => 'Proses']);
        StatusTransaksi::factory()->create(['status_transaksi' => 'Selesai']);
    }
}
