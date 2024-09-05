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
        Schema::create('sgo_ssl', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();               // Tên SSL, có thể null
            $table->decimal('price', 10, 2)->nullable();      // Giá SSL, có thể null
            $table->decimal('maintainfee', 10, 2)->nullable();// Phí duy trì, có thể null
            $table->string('certification')->nullable();      // Chứng chỉ, có thể null
            $table->integer('numberdomain')->nullable();      // Số lượng domain, có thể null
            $table->decimal('insurance', 15, 2)->nullable();  // Tiền bảo hiểm, có thể null
            $table->string('level')->nullable();              // Cấp độ SSL, có thể null
            $table->date('time')->nullable();              // Thời gian hiệu lực (tháng, năm, etc.), có thể null
            $table->integer('ssltype')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_ssl');
    }
};
