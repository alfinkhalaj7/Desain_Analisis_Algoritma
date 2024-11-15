<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGuru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'pendidikan',
        'keahlian',
    ];

    public function absensi()
    {
        return $this->hasMany(AbsensiGuru::class, 'guru_id');
    }

    public function jadwalMengajar()
    {
        return $this->hasMany(JadwalMengajar::class, 'guru_id');
    }

    public function evaluasi()
    {
        return $this->hasMany(EvaluasiKinerja::class, 'guru_id');
    }

    public function izinCuti()
    {
        return $this->hasMany(IzinCuti::class, 'guru_id');
    }
}
