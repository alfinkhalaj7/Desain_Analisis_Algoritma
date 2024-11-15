<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\IzinCuti;

class IzinCutiSeeder extends Seeder
{
    public function run()
    {
        IzinCuti::insert([
            [
                'guru_id' => 1, // Referensi ke DataGuru
                'tanggal_mulai' => '2024-11-20',
                'durasi' => 3,
                'status' => 'Approved',

            ],
            [
                'guru_id' => 2, // Referensi ke DataGuru
                'tanggal_mulai' => '2024-12-01',
                'durasi' => 2,
                'status' => 'Pending',
,
            ],
        ]);
    }
}
