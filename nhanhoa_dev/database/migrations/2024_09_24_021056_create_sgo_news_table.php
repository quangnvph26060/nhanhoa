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
        Schema::create('sgo_news', function (Blueprint $table) {
            $table->id(); // Tự động tạo khóa chính 'id'
            $table->string('title'); // Tiêu đề bài báo
            $table->integer('author_id'); // ID của tác giả
            $table->longText('content'); // Nội dung bài báo
            $table->integer('views')->default(0); // Lượng truy cập, mặc định là 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_news');
    }
};
