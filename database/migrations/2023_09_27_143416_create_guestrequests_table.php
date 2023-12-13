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
        Schema::create('guestrequests', function (Blueprint $table) {
            $table->id();
            $table->String ('name');
            $table->String ('email');
            $table->String ('date');
            $table->string ('start_time');
            $table->string ('end_time');
            $table->String ('hall_name');
            $table->String ('faculty');
            $table->String ('department');
            $table->String ('reason',400)->nullable();
            $table->unsignedBigInteger('guest_id');
            $table->timestamp('read_at')->nullable();
            $table->foreign('guest_id')->references('id')->on('guests')
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
        Schema::dropIfExists('guestrequests');
    }
};
