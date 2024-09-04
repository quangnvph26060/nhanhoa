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
        Schema::create('sgo_ssltype', function (Blueprint $table) {
            $table->id();             // Tạo cột id tự động tăng
            $table->string('name');   // Tạo cột name với kiểu dữ liệu chuỗi
            $table->timestamps();     // Tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_ssltype');
    }
};
