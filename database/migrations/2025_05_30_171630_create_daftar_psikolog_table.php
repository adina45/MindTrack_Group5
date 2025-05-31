<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('daftar_psikolog', function (Blueprint $table) {
            $table->id('psikolog_id'); // primary key
            $table->string('nama');
            $table->string('email')->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('daftar_psikolog');
    }
};