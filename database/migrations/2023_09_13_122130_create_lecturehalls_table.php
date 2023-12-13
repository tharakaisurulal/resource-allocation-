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
        Schema::create('lecturehalls', function (Blueprint $table) {
            $table->id();
            $table->String ('lh_name');
            $table->String ('lh_capacity')->nullable();
            $table->String ('lh_air_conditioner')->nullable();
            $table->String ('lh_projector')->nullable();
            $table->String ('lh_soundsystem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturehalls');
    }
};
