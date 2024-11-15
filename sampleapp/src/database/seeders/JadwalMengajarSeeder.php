<?php

namespace Database\Seeders;

use App\Models\EvaluasiKinerja;
use Illuminate\Database\Seeder;
use Database\Seeders\JadwalMengajarSeeder;

class EvaluasiKinerjaSeeder extends Seeder
{
    public function run()
    {
        EvaluasiKinerja::insert([
            [
                'guru_id' => 1,
                'skor' => 85,
                'feedback' => 'Menguasai materi dengan baik, perlu meningkatkan interaksi dengan siswa.',

            ],
            [
                'guru_id' => 2,
                'skor' => 90,
                'feedback' => 'Berprestasi dalam menyampaikan pelajaran, hubungan baik dengan siswa.',

            ],
        ]);
    }
}
