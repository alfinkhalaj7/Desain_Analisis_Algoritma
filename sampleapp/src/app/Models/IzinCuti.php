<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IzinCuti extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id',
        'tanggal_mulai',
        'durasi',
        'status',
    ];

    public function guru()
    {
        return $this->belongsTo(DataGuru::class, 'guru_id');
    }
}
