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
        Schema::create('amenities_packages', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_amenitie')->nullable();
         
            $table->unsignedBigInteger('id_package')->nullable();
            $table->timestamps();

            $table->foreign('id_amenitie')->references('id')->on('amenities')->onDelete('cascade');

            // Khóa ngoại đến bảng "packages"
            $table->foreign('id_package')->references('id')->on('packages')->onDelete('cascade');

           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amenities_packages');
    }
};
