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
        Schema::create('Ekstra', function (Blueprint $table) {
            $table->id();
            $table->integer("jumlah_anggota");
            $table->string("nama_ekstra");
            $table->date("hari_ekstra");
            $table->string("guru_pembimbing");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekstras');
    }
};
