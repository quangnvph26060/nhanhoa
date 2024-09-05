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
        Schema::create('sgo_hosting', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();               // name
            $table->decimal('price', 10, 2)->nullable();     // Tạo cột id tự động tăng
            $table->string('storage')->nullable();          // Dung lượng lưu trữ như '3GB SSD'
            $table->string('bandwidth')->nullable();        // Băng thông/tháng như 'Unlimited'
            $table->integer('cpu')->nullable();              // CPU như '1 core'
            $table->integer('ram')->nullable();              // RAM như '1 GB'
            $table->integer('mysql')->nullable();            // MySQL/MariaDB
            $table->string('ftp_account')->nullable();       // FTP Account như 'Unlimited'
            $table->string('subdomain')->nullable();         // Subdomain như 'Unlimited'
            $table->string('alias_parked_domain')->nullable(); // Alias/Parked Domain như 'Unlimited'
            $table->integer('email_account')->nullable();    // Email Account
            $table->integer('hostingtype_id')->nullable();   // Thêm cột hostingtype_id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_hosting');
    }
};
