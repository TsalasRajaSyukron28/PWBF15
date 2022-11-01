<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID',
        'Nama',
        'NIK',
        'Jenis_Kelamin',
        'Tanggal_Lahir',
        'Alamat',
    ];
}
