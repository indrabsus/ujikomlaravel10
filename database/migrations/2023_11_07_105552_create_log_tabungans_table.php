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
        Schema::create('log_tabungan', function (Blueprint $table) {
            $table->uuid('id_log_tabungan')->primary();
            $table->bigInteger('nominal');
            $table->foreignUuid('id_siswa')->references('id_siswa')->on('data_siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignUuid('id_petugas')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('no_invoice');
            $table->enum('jenis', ['db','kd']);
            $table->string('log');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_tabungans');
    }
};
