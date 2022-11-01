<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan_IbuHamil extends Model
{
    use HasFactory;

    protected $fillable = [
        'Tinggi_Badan',
        'Berat_Badan',
        'Tekanan_Darah',
        'Tanggal',
    ];
}
