<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     */
    public function up(): void
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->foreignId('id_penulis')->onDelete('cascade');
            $table->text('pembahasan');
            $table->foreignId('id_kategori')->onDelete('cascade');
            $table->string('cover');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *

     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
}
