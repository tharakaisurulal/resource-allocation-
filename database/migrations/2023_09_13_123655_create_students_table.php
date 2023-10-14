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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->String ('username')->unique(); //username is reg_no
            $table->String ('password')->unique();
            //$table->String ('reg_no');
            $table->String ('first_name');
            $table->String ('last_name');
            $table->String ('email')->nullable();
            $table->String ('mobile')->nullable();
            $table->String ('photo')->nullable();
            $table->unsignedBigInteger ('subject1')->nullable();
            $table->foreign('subject1')->references('id')->on('courses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger ('subject2')->nullable();
            $table->foreign('subject2')->references('id')->on('courses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger ('subject3')->nullable();
            $table->foreign('subject3')->references('id')->on('courses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger ('subject4')->nullable();
            $table->foreign('subject4')->references('id')->on('courses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger ('subject5')->nullable();
            $table->foreign('subject5')->references('id')->on('courses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger ('subject6')->nullable();
            $table->foreign('subject6')->references('id')->on('courses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger ('subject7')->nullable();
            $table->foreign('subject7')->references('id')->on('courses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger ('subject8')->nullable();
            $table->foreign('subject8')->references('id')->on('courses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
