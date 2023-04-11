<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pasien::create([
            'nama_pasien' => 'Egi Fauzi, S.Kom',
            'alamat' => 'Jl. Bengawan no 41, Kota Bandung, Jawa Barat 40161',
            'telepon' => '081222111000',
            'rumahsakit_id' => 1,
        ]);
    }
}
