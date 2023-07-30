<?php

namespace App\Models;

use Database\Factories\JadwalFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    public function bimbingans()
    {
        return $this->hasMany(Bimbingan::class);
    }
}
