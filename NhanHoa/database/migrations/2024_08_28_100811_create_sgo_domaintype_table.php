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
        Schema::create('sgo_domaintype', function (Blueprint $table) {
            $table->id();         // Tạo cột id tự động tăng
            $table->string('name'); // Tạo cột name với kiểu dữ liệu chuỗi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_domaintype');
    }
};
