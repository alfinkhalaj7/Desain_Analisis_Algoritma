<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiKinerja extends Model
{
    use HasFactory;

    protected $fillable = ['guru_id', 'skor', 'feedback'];
}
