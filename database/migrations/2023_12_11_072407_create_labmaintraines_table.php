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
        Schema::create('labmaintraines', function (Blueprint $table) {
            $table->id();

             // Add columns based on the form fields
             $table->string('user_name');
             $table->string('lab');
             $table->boolean('lap/pc')->nullable();
             $table->boolean('a_c')->nullable();
             $table->boolean('fan')->nullable();
             $table->boolean('projector')->nullable();
             $table->boolean('sound')->nullable();
             $table->boolean('light')->nullable();
             $table->string('other')->nullable();
             $table->string('add_comment')->nullable();
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labmaintraines');
    }
};
