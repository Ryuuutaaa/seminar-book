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
        Schema::create('seminars', callback: function (Blueprint $table) {
            $table->id();
            $table->string('nama_seminar');
            $table->string('narasumber');
            $table->text('deskripsi');
            $table->integer('jumlah_kursi');
            $table->date("tanggal_seminar");
            $table->string("image");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seminars');
    }
};
