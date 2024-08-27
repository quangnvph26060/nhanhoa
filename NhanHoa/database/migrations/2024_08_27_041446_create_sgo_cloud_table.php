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
        Schema::create('sgo_cloud', function (Blueprint $table) {
            $table->id(); // Tạo cột id chính cho bảng
            $table->string('name'); // Trường 'name'
            $table->string('cpu'); // Trường 'cpu'
            $table->integer('core'); // Trường 'core'
            $table->integer('ssd'); // Trường 'ssd'
            $table->string('ram'); // Trường 'ram'
            $table->string('ip'); // Trường 'ip'
            $table->string('bandwidth'); // Trường 'bandwidth'
            $table->integer('cloudtypes_id'); // Trường 'cloudtypes_id' với khóa ngoại
            $table->timestamps(); // Tạo các cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_cloud');
    }
};
