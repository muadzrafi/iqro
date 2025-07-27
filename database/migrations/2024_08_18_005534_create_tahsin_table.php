<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('tahsin', function (Blueprint $table) {
            // $table->id();
            // $table->unsignedBigInteger('santris_id')
            // ->nullable();
            // $table->unsignedBigInteger('halaqohs_id')
            // ->nullable();
            // $table->int('baligho');
            // $table->string('tadarus');
            // $table->string('ziyadah');
            // $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahsin');
    }
};
