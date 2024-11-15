<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\EvaluasiKinerja;

class EvaluasiKinerjaSeeder extends Seeder
{
    public function run(): void
    {
        EvaluasiKinerja::insert([
            [
                'guru_id' => 1, // Referensi ke DataGuru
                'skor' => 85,
                'feedback' => 'Menguasai materi dengan baik, perlu meningkatkan interaksi dengan siswa.',

            ],
            [
                'guru_id' => 2, // Referensi ke DataGuru
                'skor' => 90,
                'feedback' => 'Berprestasi dalam menyampaikan pelajaran, hubungan baik dengan siswa.',

            ],
        ]);
    }
}
