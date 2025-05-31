<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('hasil_konsultasi', function (Blueprint $table) {
            $table->string('nama_ps')->nullable();
            $table->string('email')->nullable();
            $table->text('keluhan')->nullable();
            $table->time('jam')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('hasil_konsultasi', function (Blueprint $table) {
            $table->dropColumn(['nama_ps', 'email', 'keluhan', 'jam']);
        });
    }
};