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
        Schema::create('sgo_banks', function (Blueprint $table) {
            $table->id(); // ID tự tăng
            $table->string('name'); // Tên đầy đủ của ngân hàng
            $table->string('code')->unique(); // Mã ngân hàng, đảm bảo duy nhất
            $table->string('bin')->nullable(); // Mã BIN, có thể để trống
            $table->string('shortName')->nullable(); // Tên viết tắt của ngân hàng, có thể để trống
            $table->timestamps(); // Thêm cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_banks');
    }
};
