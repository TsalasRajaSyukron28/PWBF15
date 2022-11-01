<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan_Balita extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Tinggi_Badan',
        'Berat_Badan',
    ];
}
