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
        Schema::create('sgo_hosting_promotion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hosting_id');
            $table->unsignedBigInteger('promotion_id');
            $table->timestamps();
            $table->unique(['hosting_id', 'promotion_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_hosting_promotion');
    }
};
