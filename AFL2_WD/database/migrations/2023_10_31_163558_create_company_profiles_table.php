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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('tentang_kami')->nullable(false);
            $table->text('tentang_kami1')->nullable(false);
            $table->text('tentang_kami2')->nullable(false);
            $table->text('tentang_kami3')->nullable(false);
            $table->text('tentang_kami4')->nullable(false);
            $table->text('tentang_kami5')->nullable(false);
            $table->text('visi')->nullable(false);
            $table->text('misi')->nullable(false);
            $table->text('sejarah')->nullable(false);
            $table->text('sejarah1')->nullable(false);
            $table->text('sejarah2')->nullable(false);
            $table->text('sejarah3')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
