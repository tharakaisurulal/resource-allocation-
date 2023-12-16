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
        Schema::create('contact_us_messages', function (Blueprint $table) {
            $table->String ('First name');
            $table->String ('Last name');
            $table->String ('email');
            $table->String ('mobile number');
            $table->string ('');
            $table->string ('message');
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guestrequests');
    }
};
