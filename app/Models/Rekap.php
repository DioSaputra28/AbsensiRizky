<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    protected $table = 'rekaps';
    protected $fillable = [
        'tanggal'
    ];

    public function absen()
    {
        return $this->hasMany(Absensi::class, 'tanggal', 'tanggal');
    }
}
