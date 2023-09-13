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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->String ('username')->unique(); //username is email
            $table->String ('password')->unique();
            $table->String ('guest_name');
            $table->String ('guest_faculty')->nullable();
            $table->String ('guest_department')->nullable();
            $table->String ('guest_position');
            $table->String ('mobile');
            $table->String ('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
