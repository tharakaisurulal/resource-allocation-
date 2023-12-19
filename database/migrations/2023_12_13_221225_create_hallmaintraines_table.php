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
        Schema::create('hallmaintraines', function (Blueprint $table) {
            
                $table->id();
                $table->string('user_name');
                $table->string('hall');
                $table->boolean('a_c')->nullable();
                $table->boolean('fan')->nullable();
                $table->boolean('projector')->nullable();
                $table->boolean('sound')->nullable();
                $table->boolean('light')->nullable();
                $table->boolean('chair')->nullable();
                $table->text('other')->nullable();
                $table->text('add_comment')->nullable();
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hallmaintraines');
    }
};
