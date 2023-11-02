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
        Schema::create('projects', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->text('lokasi')->nullable(false);
            $table->text('pemberi_pekerjaan')->nullable(false);
            $table->text('jenis_pekerjaan')->nullable(false);
            $table->text('kontak')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
