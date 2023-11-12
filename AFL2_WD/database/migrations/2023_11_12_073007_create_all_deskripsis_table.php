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
        Schema::create('all_deskripsis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('deskripsi_news')->nullable();
            $table->text('deskripsi_news1')->nullable();
            $table->text('deskripsi_news2')->nullable();
            $table->text('deskripsi_news3')->nullable();
            $table->text('deskripsi_news4')->nullable();
            $table->text('deskripsi_project')->nullable();
            $table->text('deskripsi_project1')->nullable();
            $table->text('deskripsi_project2')->nullable();
            $table->text('deskripsi_project3')->nullable();
            $table->text('deskripsi_project4')->nullable();
            $table->text('deskripsi_beranda')->nullable();
            $table->text('deskripsi_beranda1')->nullable();
            $table->text('deskripsi_beranda2')->nullable();
            $table->text('deskripsi_beranda3')->nullable();
            $table->text('deskripsi_beranda4')->nullable();
            $table->text('deskripsi_beranda5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_deskripsis');
    }
};
