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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->after('password')->references('id')->on('roles');
        });

        Schema::table('seminars', function (Blueprint $table) {
            $table->foreignId('kategori_id')->after('nama_seminar')->references('id')->on('categories');
        });

        Schema::table('transaction', function (Blueprint $table) {
            $table->foreignId('user_id')->after('id')->references('id')->on('users');
            $table->foreignId('seminar_id')->after('user_id')->references('id')->on('seminars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relation');
    }
};
