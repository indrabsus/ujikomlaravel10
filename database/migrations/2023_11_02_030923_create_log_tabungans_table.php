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
            $table->id('id_log_tabungan');
            $table->bigInteger('nominal');
            $table->string('no_invoice');
            $table->enum('jenis', ['debit','kredit']);
            $table->string('log');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_tabungan');
    }
};
