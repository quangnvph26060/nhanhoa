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
        Schema::create('sgo_ssl_pay', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Trường tên
            $table->string('phone'); // Trường số điện thoại
            $table->string('email'); // Trường email
            $table->string('sslid'); // Trường SSL ID
            $table->timestamps(); // Thêm trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_ssl_pay');
    }
};
