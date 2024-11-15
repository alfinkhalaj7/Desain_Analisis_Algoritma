<?php

namespace Database\Seeders;

use App\Models\AbsensiGuru;
use Illuminate\Database\Seeder;

class AbsensiGuruSeeder extends Seeder
{
    public function run()
    {
        AbsensiGuru::insert([
            [
                'guru_id' => 1,
                'tanggal' => '2024-11-14',
                'kehadiran' => true,

            ],
            
            [
                'guru_id' => 2,
                'tanggal' => '2024-11-14',
                'kehadiran' => false,

            ],
        ]);
    }
}
