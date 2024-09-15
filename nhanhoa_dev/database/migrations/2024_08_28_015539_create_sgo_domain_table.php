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
        Schema::create('sgo_domain', function (Blueprint $table) {
           $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('loai')->nullable();
            $table->decimal('gia_cu', 10, 2)->nullable();
            $table->decimal('gia_moi', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_domain');
    }
};
