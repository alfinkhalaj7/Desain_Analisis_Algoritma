<?php

namespace Database\Seeders;

use App\Models\DataGuru;
use Illuminate\Database\Seeder;

class DataGuruSeeder extends Seeder
{
    public function run()
    {
        DataGuru::insert([
            [
                'nama' => 'Alfin Khalaj Syahruwardi',
                'nip' => '2024123',
                'pendidikan' => 'S1 Pendidikan Matematika',
                'keahlian' => 'Matematika',

            ],
            [
                'nama' => 'Fiqri Faturrohman',
                'nip' => '2024098',
                'pendidikan' => 'S1 Pendidikan Bahasa Inggris',
                'keahlian' => 'Bahasa Inggris',

            ],
            [
                'nama' => 'Arifin Sulistiono',
                'nip' => '2024765',
                'pendidikan' => 'S1 Pendidikan Fisika',
                'keahlian' => 'Fisika',

            ],
            [
                'nama' => 'Rizky Nugroho',
                'nip' => '2024109',
                'pendidikan' => 'S1 Pendidikan Biologi',
                'keahlian' => 'Biologi',

            ],
            [
                'nama' => 'Maiyatul Lintang ',
                'nip' => '2024385',
                'pendidikan' => 'S1 Pendidikan Sejarah',
                'keahlian' => 'Sejarah',

            ],
        ]);
    }
}
