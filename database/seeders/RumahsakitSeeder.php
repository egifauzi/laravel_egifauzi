<?php

namespace Database\Seeders;

use App\Models\Rumahsakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RumahsakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rumahsakit::create([
            'nama_rumahsakit' => 'RS Hasan Sadikin',
            'alamat' => 'Jl. Pasteur No.38, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161',
            'email' => 'rshasansadikin@gmail.com',
            'telepon' => '081221222200',
        ]);
    }
}
