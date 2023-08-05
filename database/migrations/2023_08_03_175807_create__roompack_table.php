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
        Schema::create('roompack', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_room');
            $table->unsignedBigInteger('id_package');
            $table->foreign('id_room')->references('id')->on('rooms')->onDelete('cascade');
            $table->foreign('id_package')->references('id')->on('packages')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roompack');
    }
};
