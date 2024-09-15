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
        Schema::create('sgo_cloud_promotion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cloud_id');
            $table->unsignedBigInteger('promotion_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_cloud_promotion');
    }
};
