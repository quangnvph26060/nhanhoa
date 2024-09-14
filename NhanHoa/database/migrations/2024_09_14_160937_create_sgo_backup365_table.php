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
        Schema::create('sgo_backup365', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên server
            $table->integer('storage'); // Dung lượng GB
            $table->decimal('price', 10, 0); // Giá (lưu kiểu số thập phân)
            $table->integer('agent'); // Số lượng Agent
            $table->string('data_encryption'); // Mã hóa dữ liệu
            $table->enum('data_compression', ['Có', 'Không']); // Nén dữ liệu
            $table->enum('schedule_backup', ['Có', 'Không']); // Thiết lập lịch sao lưu
            $table->enum('auto_backup', ['Có', 'Không']); // Sao lưu tự động
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_backup365');
    }
};
