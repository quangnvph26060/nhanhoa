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
        Schema::create('sgo_server_location_pay', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên người thanh toán
            $table->string('phone'); // Số điện thoại
            $table->string('email'); // Email
            $table->unsignedBigInteger('serverlocation_id'); // ID từ bảng server_location (giả sử đây là khóa ngoại)
            $table->timestamps(); // Ngày tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_server_location_pay');
    }
};
