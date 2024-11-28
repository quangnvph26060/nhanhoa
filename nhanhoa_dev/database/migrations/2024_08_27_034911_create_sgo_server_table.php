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
        Schema::create('sgo_server', function (Blueprint $table) {
            $table->id(); // Tạo cột id chính cho bảng
            $table->string('name'); // Trường 'name'
            $table->string('cpu'); // Trường 'cpu'
            $table->string('ssd'); // Trường 'ssd'
            $table->integer('ram'); // Trường 'ram'
            $table->text('data'); // Trường 'data'
            $table->string('ip'); // Trường 'ip'
            $table->integer('domestic'); // Trường 'domestic'
            $table->integer('international'); // Trường 'international'
            $table->timestamps(); // Tạo các cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_server');
    }
};
