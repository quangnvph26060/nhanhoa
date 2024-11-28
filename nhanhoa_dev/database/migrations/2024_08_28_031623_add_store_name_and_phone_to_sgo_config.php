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
        Schema::table('sgo_config', function (Blueprint $table) {
            $table->string('store_name')->nullable(); // Tên cửa hàng, có thể để trống
            $table->string('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sgo_config', function (Blueprint $table) {
            $table->dropColumn(['store_name', 'phone']);
        });
    }
};
