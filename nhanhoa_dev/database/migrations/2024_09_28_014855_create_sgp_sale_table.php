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
        Schema::create('sgp_sale', function (Blueprint $table) {
            $table->id(); // Khóa chính
            $table->string('title'); // Trường title, kiểu chuỗi
            $table->text('describe'); // Trường describe, kiểu text để chứa nội dung mô tả
            $table->timestamps(); // Trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgp_sale');
    }
};
