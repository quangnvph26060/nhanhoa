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
        Schema::create('sgo_home', function (Blueprint $table) {
            $table->id();
            $table->string('section1_title')->nullable();
            $table->text('section1_content')->nullable();
            $table->string('section2_title')->nullable();
            $table->text('section2_content')->nullable();
            $table->string('section3_title')->nullable();
            $table->text('section3_content')->nullable();

            $table->string('section4_title')->nullable(); // Tiêu đề cho section 4
            $table->text('section4_content')->nullable(); // Nội dung cho section 4

            $table->string('section5_title')->nullable(); // Tiêu đề cho section 5
            $table->text('section5_content')->nullable(); // Nội dung cho section 5

            $table->string('section6_title')->nullable(); // Tiêu đề cho section 6
            $table->text('section6_content')->nullable(); // Nội dung cho section 6
            $table->timestamps(); // Created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_home');
    }
};
