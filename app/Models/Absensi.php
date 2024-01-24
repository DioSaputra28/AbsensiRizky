<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $table = 'absensis';
    protected $fillable = [
        'id_murid',
        'tanggal',
        'keterangan',
        'noAbsen'
    ];
    public function murid()
    {
        return $this->belongsTo(Murid::class, 'id_murid', 'id');
    }
}
