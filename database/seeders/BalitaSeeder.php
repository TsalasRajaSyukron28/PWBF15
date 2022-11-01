<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BalitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Balita::create([
            'Nama'=> 'Afwan Asrori',
            'NIK'=> '1729129310931930',
            'Jenis_Kelamin'=> 'Laki-Laki',
            'Tanggal_Lahir'=> '22 Februari 2003',
            'Alamat'=> 'Jl Lontar',
        ]);

        Balita::create([
            'Nama'=> 'Muhammad Lutfiyanto',
            'NIK'=> '3173173918318832',
            'Jenis_Kelamin'=> 'Laki-Laki',
            'Tanggal_Lahir'=> '22 Desember 2003',
            'Alamat'=> 'Jl Lontar Kulon',
        ]);

        Balita::create([
            'Nama'=> 'Favian Hilmi Putradifa',
            'NIK'=> '3829283482923983',
            'Jenis_Kelamin'=> 'Laki-Laki',
            'Tanggal_Lahir'=> '28 Oktober 2002',
            'Alamat'=> 'Jl Manukan Kulon',
        ]);

        Balita::create([
            'Nama'=> 'Akmal Nadya',
            'NIK'=> '1418318319319989',
            'Jenis_Kelamin'=> 'Perempuan',
            'Tanggal_Lahir'=> '12 Juli 2003',
            'Alamat'=> 'Jl Made Bima',
        ]);

        Balita::create([
            'Nama'=> 'Fatia Risma Della',
            'NIK'=> '35235279020222121',
            'Jenis_Kelamin'=> 'Perempuan',
            'Tanggal_Lahir'=> '15 Juni 2003',
            'Alamat'=> 'Jl Gempol Pasuruan',
        ]);

        Balita::create([
            'Nama'=> 'Firly Nur Rachmadini',
            'NIK'=> '123613197310831311',
            'Jenis_Kelamin'=> 'Perempuan',
            'Tanggal_Lahir'=> '21 April 2003',
            'Alamat'=> 'Jl Sepanjang',
        ]);
    }
}
