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
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ruangan')->unsigned();
            $table->integer('id_kategori')->unsigned();
            $table->string('nomor_barang');
            $table->string('nama_barang')->unique();
            $table->string('gambar');
            $table->text('spek');
            $table->integer('stok');
            $table->enum('satuan', ['unit', 'kilogram', 'butir', 'liter', 'lembar']);
            $table->enum('kondisi',['baik','rusak','tidak layak']);
            $table->foreign('id_ruangan')->on('ruangan')->references('id')->onDelete('cascade');
            $table->foreign('id_kategori')->on('kategori')->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
