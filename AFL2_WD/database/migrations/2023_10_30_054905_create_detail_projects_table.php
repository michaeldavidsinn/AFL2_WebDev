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
        Schema::create('detail_projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('jenis_pekerjaan')->nullable(false);
            $table->text('pemberi_pekerjaan')->nullable(false);
            $table->text('lokasi')->nullable(false);
            $table->text('nomor_telepon')->nullable(false);
            $table->text('email')->nullable(false);
            $table->text('deskripsi_pekerjaan')->nullable(false);
            $table->text('foto_dokumentasi')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_projects');
    }
};
