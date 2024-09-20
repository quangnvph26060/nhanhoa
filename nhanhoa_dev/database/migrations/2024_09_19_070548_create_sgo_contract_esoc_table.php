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
        Schema::create('sgo_contract_esoc', function (Blueprint $table) {
            $table->id();
            $table->string('contract_number')->unique(); // Số hợp đồng, ví dụ "ESOC-200"
            $table->string('package_name'); // Tên gói, ví dụ "Gói 200 hợp đồng"
            $table->decimal('price', 15, 2); // Giá tiền, ví dụ 1.920.000 VNĐ
            $table->integer('storage_duration')->default(10); // Thời gian lưu trữ (năm)
            $table->string('usage_duration'); // Thời gian sử dụng
            $table->string('storage_type'); // Loại lưu trữ, ví dụ "Đám mây"
            $table->enum('storage_system', [
                'HDD',
                'SSD',
                'NVMe',
                'SATA SSDss',
                'SSHD',
            ]); // Hệ thống ổ đĩa truy xuất,
            $table->decimal('maintenance_fee', 15, 2)->default(500000); // Chi phí bảo trì, bản quyền (VNĐ/năm)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_contract_esoc');
    }
};
