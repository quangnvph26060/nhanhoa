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
        Schema::create('sgo_solutions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('fee')->nullable();
            $table->bigInteger('initialization_fee');
            $table->integer('branch');
            $table->integer('record_capacity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_solutions');
    }
};
