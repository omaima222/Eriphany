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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->unsignedBigInteger('option1_id')->index();
            $table->foreign('option1_id')->references('id')->on('options')->onDelete('cascade');
            $table->unsignedBigInteger('option2_id')->index();
            $table->foreign('option2_id')->references('id')->on('options')->onDelete('cascade');
            $table->unsignedBigInteger('option3_id')->index();
            $table->foreign('option3_id')->references('id')->on('options')->onDelete('cascade');
            $table->unsignedBigInteger('option4_id')->index();
            $table->foreign('option4_id')->references('id')->on('options')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
