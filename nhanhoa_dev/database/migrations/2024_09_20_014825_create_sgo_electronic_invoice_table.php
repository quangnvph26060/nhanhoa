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
        Schema::create('sgo_electronic_invoice', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_quantity'); // Số lượng hóa đơn
            $table->decimal('price', 15, 0); // giá
            $table->string('storage_duration'); // Thời gian lưu trữ
            $table->string('usage_time'); // Thời gian sử dụng
            $table->string('c'); // Không gian lưu trữ
            $table->enum('disk_system', [
                'HDD',
                'SSD',
                'NVMe',
                'SATA SSD',
                'SSHD',
            ]); // Hệ thống ổ đĩa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_electronic_invoice');
    }
};
