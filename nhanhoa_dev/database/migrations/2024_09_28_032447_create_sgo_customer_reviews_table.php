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
        Schema::create('sgo_customer_reviews', function (Blueprint $table) {
            $table->id(); // Tạo cột id tự động tăng
            $table->string('name'); // Cột tên
            $table->string('web')->nullable(); // Cột trang web (có thể null)
            $table->text('content'); // Cột nội dung đánh giá
            $table->string('avatar')->nullable(); // Cột avatar (có thể null)
            $table->timestamps(); // Tạo cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_customer_reviews');
    }
};
