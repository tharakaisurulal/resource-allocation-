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
        Schema::create('accsupportives', function (Blueprint $table) {
            $table->id();
            $table->String ('username')->unique(); //username is email
            $table->String ('password')->unique();
            $table->String ('acc_name');
            $table->String ('acc_mobile')->nullable();
            $table->String ('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accsupportives');
    }
};
