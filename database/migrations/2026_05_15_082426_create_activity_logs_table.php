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
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->string('aksi');           // "Memperbarui SEO"
            $table->string('detail')->nullable(); // "Mengubah meta description"
            $table->string('pengelola');      // "Admin Asri"
            $table->string('status')->default('berhasil'); // berhasil, selesai, update, gagal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
