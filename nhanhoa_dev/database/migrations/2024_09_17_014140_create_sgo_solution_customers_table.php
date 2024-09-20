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
        Schema::create('sgo_solution_customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('solution_id');
            $table->foreign('solution_id')->references('id')->on('sgo_solutions')->onDelete('cascade');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_solution_customers');
    }
};
