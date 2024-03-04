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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('pemilik');
            $table->bigInteger('nomorHp');
            $table->string('name');
            $table->string('tipe');
            $table->integer('kursi');
            $table->string('mesin');
            $table->string('bahanBakar');
            $table->string('transmisi');
            $table->integer('tahun');
            $table->string('harga');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
