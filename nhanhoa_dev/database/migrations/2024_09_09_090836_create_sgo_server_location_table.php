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
        Schema::create('sgo_server_location', function (Blueprint $table) {
            $table->id();
            $table->string('bw_in_country')->nullable(); // Băng thông trong nước
            $table->string('bw_international')->nullable(); // Băng thông quốc tế
            $table->string('data_transfer')->nullable(); // Dữ liệu truyền
            $table->string('rack_space')->nullable(); // Không gian rack
            $table->string('power_capacity')->nullable(); // Công suất nguồn
            $table->enum('ups_backup', ['Có', 'Không']); // UPS/Máy điện dự phòng
            $table->enum('air_conditioning', ['Có', 'Không']); // Điều hoà nhiệt độ
            $table->string('network_socket')->nullable(); // Ổ cắm mạng
            $table->integer('ip_address')->nullable(); // Địa chỉ IP
            $table->integer('promotion')->nullable(); // Khuyến mãi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_server_location');
    }
};
