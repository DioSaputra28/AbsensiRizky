<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    protected $table = 'murids';
    protected $fillable = [
        'namaMurid',
        'nisn',
        'kelamin',
        'noAbsen'
    ];
    public function murid()
    {
        return $this->hasMany(Absensi::class);
    }
}
