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
        Schema::create('_laporans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_halaqoh');
            $table->integer('id_santri');
            $table->string('hafalan_terakhir');
            $table->string('murojaah_hafalan_baru');
            $table->string('murojaah_hafalan_lama');
            $table->string('mudarosah');
            $table->string('ujian_juz_terakhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_laporans');
    }
};
