<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pasiens::create([
            'Nama'=> 'Zahwa Finti A',
            'NIK'=> '1234567890987654',
            'Tanggal_Lahir'=> '31 Oktober 2003',
            'Alamat'=> 'Jl Bendul Meirisi',
        ]);

        Pasiens::create([
            'Nama'=> 'Carissa Eka Rachmadini',
            'NIK'=> '1000200030004000',
            'Tanggal_Lahir'=> '10 Desember 2003',
            'Alamat'=> 'Jl Pondok Wage',
        ]);

        Pasiens::create([
            'Nama'=> 'Shabrina Alya Salmalindra',
            'NIK'=> '3121918194818419',
            'Tanggal_Lahir'=> '28 Oktober 2003',
            'Alamat'=> 'Jl Sukodono',
        ]);

        Pasiens::create([
            'Nama'=> 'Nela Anjani',
            'NIK'=> '1647616491874101',
            'Tanggal_Lahir'=> '12 Mei 2003',
            'Alamat'=> 'Jl Gajah Mada',
        ]);

        Pasiens::create([
            'Nama'=> 'Wahyunita Maulidya',
            'NIK'=> '1624272864288686',
            'Tanggal_Lahir'=> '4 Juli 2003',
            'Alamat'=> 'Jl Gempol Pasuruan',
        ]);

        Pasiens::create([
            'Nama'=> 'Egidia Eza Maulidya',
            'NIK'=> '1112741471973408',
            'Tanggal_Lahir'=> '21 April 2003',
            'Alamat'=> 'Jl Menganti 20',
        ]);
    }
}
