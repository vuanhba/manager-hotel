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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('room_type_id');
       
            $table->string('room_number');
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->foreign('room_type_id')->references('id')->on('room_type');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
