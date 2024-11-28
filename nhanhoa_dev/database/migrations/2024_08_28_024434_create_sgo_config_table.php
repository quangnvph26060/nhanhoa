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
        Schema::create('sgo_config', function (Blueprint $table) {
            $table->id(); // ID tự tăng
            $table->string('email')->nullable(); // Email, có thể để trống
            $table->string('logo')->nullable(); // Logo, có thể để trống
            $table->string('bank_account')->nullable(); // Tài khoản ngân hàng, có thể để trống
            $table->string('qr')->nullable(); // Mã QR, có thể để trống
            $table->unsignedBigInteger('bank_id')->nullable(); // ID ngân hàng, có thể để trống
            $table->string('receiver')->nullable(); // Người nhận, có thể để trống
            $table->timestamps(); // Thêm cột
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_config');
    }
};
