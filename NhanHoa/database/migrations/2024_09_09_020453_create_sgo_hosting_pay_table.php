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
        Schema::create('sgo_hosting_pay', function (Blueprint $table) {
            $table->id(); // Tạo cột id tự động tăng
            $table->string('name'); // Cột tên
            $table->string('phone'); // Cột số điện thoại
            $table->string('email'); // Cột email, không trùng lặp
            $table->unsignedBigInteger('hostingid'); // Cột hostingid liên kết với bảng khác (nếu có)
            $table->timestamps(); // Cột created_at và updated_at tự động
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_hosting_pay');
    }
};
