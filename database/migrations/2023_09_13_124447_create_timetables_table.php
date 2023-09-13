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
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->string ('level');
            $table->string('semester');
            $table->string ('day');
            $table->string ('start_time');
            $table->string ('end_time');
            $table->unsignedBigInteger('lec_id')->nullable();
            $table->foreign('lec_id')->references('id')->on('lecturers');
            $table->unsignedBigInteger('lab_id')->nullable();
            $table->foreign('lab_id')->references('id')->on('labs');
            $table->unsignedBigInteger('lh_id')->nullable();
            $table->foreign('lh_id')->references('id')->on('lecturehalls');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};
