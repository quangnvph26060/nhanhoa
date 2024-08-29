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
            $table->id();                          // Tạo cột id tự động tăng
            $table->integer('storage')->nullable();          // Dung lượng lưu trữ như '3GB SSD'
            $table->integer('bandwidth')->nullable();        // Băng thông/tháng như 'Unlimited'
            $table->integer('cpu')->nullable();              // CPU như '1 core'
            $table->integer('ram')->nullable();              // RAM như '1 GB'
            $table->integer('number_of_websites')->nullable();  // Số lượng website
            $table->integer('mysql')->nullable();           // MySQL/MariaDB
            $table->string('ftp_account')->nullable();      // FTP Account như 'Unlimited'
            $table->string('subdomain')->nullable();        // Subdomain như 'Unlimited'
            $table->string('alias_parked_domain')->nullable(); // Alias/Parked Domain như 'Unlimited'
            $table->string('backup')->nullable();           // Sao lưu dữ liệu như 'Hàng ngày'
            $table->integer('email_account')->nullable();   // Email Account
            $table->string('installation')->nullable();
            $table->integer('dask')->nullable();     // đĩa
            $table->integer('hostingtype_id')->nullable();  // Thêm cột hostingtype_id
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
