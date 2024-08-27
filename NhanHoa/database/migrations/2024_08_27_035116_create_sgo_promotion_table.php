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
        Schema::create('sgo_promotion', function (Blueprint $table) {
            $table->id(); // Tạo cột id chính cho bảng
            $table->string('name'); // Trường 'name'
            $table->timestamps(); // Tạo các cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_promotion');
    }
};
