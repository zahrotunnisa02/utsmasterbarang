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
        Schema::create('listbarang', function (Blueprint $table) {
            $table->id('kode_barang');
            $table->string('nama_barang');
            $table->integer('harga_barang');
            $table->string('deskripsi_barang')->nullable();
            $table->foreignId('satuan_id')->constrained('satuan', 'kode_satuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listbarang');
    }
};
