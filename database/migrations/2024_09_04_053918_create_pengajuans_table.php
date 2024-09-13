<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            // $table->id()->unique();
            $table->text('prodi');
            $table->integer('nomor')->default(0);
            $table->text('judul');
            $table->text('edisi');
            $table->text('isbn')->unique();
            $table->text('penerbit');
            $table->text('author');
            $table->text('tahun');
            $table->integer('eksemplar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
