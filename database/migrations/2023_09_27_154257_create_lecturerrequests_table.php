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
        Schema::create('lecturerrequests', function (Blueprint $table) {
            $table->id();
            $table->String ('name');
            $table->String ('email');
            $table->String ('date');
            $table->string ('start_time');
            $table->string ('end_time');
            $table->String ('hall_name');
            $table->String ('reason',400)->nullable();
            $table->unsignedBigInteger('lecturer_id');
            $table->foreign('lecturer_id')->references('id')->on('lecturers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturerrequests');
    }
};
