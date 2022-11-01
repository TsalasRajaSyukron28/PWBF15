<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan__ibu_hamils', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('Tinggi_Badan');
            $table->integer('Berat_Badan');
            $table->integer('Tekanan_Darah');
            $table->date('Tanggal');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catatan__ibu_hamils');
    }
};
