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
        Schema::create('sgo_google_workspace_business', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên gói, ví dụ: Business Standard
            $table->decimal('price_per_month', 10, 2); // Giá theo tháng, ví dụ: 181.000 đ
            $table->string('storage_capacity'); // Dung lượng lưu trữ, ví dụ: 2TB
            $table->decimal('price_first_20_users', 10, 2); // Giá cho 20 user đầu tiên
            $table->decimal('price_after_20_users', 10, 2); // Giá cho 21 user trở lên
            $table->decimal('renewal_price', 10, 2); // Giá gia hạn
            $table->string('user_limit'); // Giới hạn số lượng user, ví dụ: 1 - 300
            $table->unsignedBigInteger('promotion_id')->nullable(); // ID của chương trình khuyến mãi (nullable)
            $table->timestamps(); // Thêm cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_google_workspace_business');
    }
};
