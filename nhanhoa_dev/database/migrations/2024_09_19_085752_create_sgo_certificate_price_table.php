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
        Schema::create('sgo_certificate_price', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->decimal('package_price', 15, 0);
            $table->integer('duration'); // Thời hạn (tháng)
            $table->decimal('service_fee', 15, 0);
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_certificate_price');
    }
};
