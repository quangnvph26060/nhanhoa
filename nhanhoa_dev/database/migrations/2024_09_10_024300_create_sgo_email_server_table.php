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
        Schema::create('sgo_email_server', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên của gói dịch vụ
            $table->decimal('price', 10, 0);// Giá của gói dịch vụ
            $table->string('inbox_rate'); // Tỷ lệ gửi mail vào inbox
            $table->string('storage_capacity'); // Dung lượng lưu trữ
            $table->string('unlimited_email_addresses'); // Địa chỉ email không giới hạn
            $table->string('unlimited_email_forwarder'); // Email forwarder không giới hạn
            $table->string('unlimited_email_list'); // Danh sách email không giới hạn
            $table->string('unlimited_email_domain'); // Tên miền email không giới hạn
            $table->string('ip_address'); // Địa chỉ IP
            $table->integer ('promotion_id'); // Khoá ngoại promotion_id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_email_server');
    }
};
