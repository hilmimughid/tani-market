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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('produk_id')->constrained('produk');
            $table->float('jumlah');
            $table->float('total');
            $table->string('alamat');
            $table->enum('status', ['Menunggu Konfirmasi', 'Sedang Dikirim', 'Selesai', 'Dibatalkan'])->default('Menunggu Konfirmasi');
            $table->mediumText('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
