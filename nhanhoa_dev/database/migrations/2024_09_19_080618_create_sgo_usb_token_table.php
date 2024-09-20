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
        Schema::create('sgo_usb_token', function (Blueprint $table) {
            $table->id();
            $table->string('package_name'); // Tên gói, mặc định là "DOANH NGHIỆP 2"
            $table->decimal('package_price', 15, 0); // Giá tiền gói (VNĐ), mặc định 2.480.000
            $table->integer('duration'); // Thời hạn (tháng), mặc định là 24 tháng
            $table->decimal('service_fee', 15,0); // Phí dịch vụ (VNĐ), mặc định 1.980.000
            $table->decimal('usb_token_price', 15, 0)->nullable(); // Giá USB Token (VNĐ), mặc định 500.000
            $table->timestamps(); // Thêm các cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_usb_token');
    }
};
