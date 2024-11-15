<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalMengajar extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id',
        'mata_pelajaran',
        'kelas',
        'hari',
    ];

    public function guru()
    {
        return $this->belongsTo(DataGuru::class, 'guru_id');
    }
}
