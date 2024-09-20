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
        Schema::create('sgo_cloud_backup', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // Tên gói, có thể null
            $table->decimal('price', 10, 2)->nullable(); // Giá, có thể null
            $table->string('package_applied')->nullable(); // Gói áp dụng, có thể null
            $table->integer('max_storage')->nullable(); // Dung lượng tối đa (GB), có thể null
            $table->string('backup_time')->nullable(); // Thời gian sao lưu, có thể null
            $table->integer('backup_count')->nullable(); // Số bản sao lưu gần nhất, có thể null
            $table->integer('backuptype')->nullable();
            $table->timestamps(); // Tự động thêm created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_cloud_backup');
    }
};
