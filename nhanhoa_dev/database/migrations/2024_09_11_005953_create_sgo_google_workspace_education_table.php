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
        Schema::create('sgo_google_workspace_education', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 0); // Giá với 10 chữ số và 2 chữ số thập phân
            $table->text('describe')->nullable(); // Mô tả, có thể để trống
            $table->integer('storage'); // Dung lượng lưu trữ (có thể thay đổi loại dữ liệu tùy theo nhu cầu)
            $table->timestamps(); // Tự động thêm các trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_google_workspace_education');
    }
};
