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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique(); // Buat URL: /blog/filosofi-batik
            $table->string('kategori');
            $table->string('status'); // Draft / Published
            $table->text('konten');
            $table->string('gambar')->nullable();
            $table->string('penulis')->default('Admin Asri');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
