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
        Schema::create('sgo_service_pricing', function (Blueprint $table) {
            $table->id();

            // Cột lưu trữ thông tin về hạng mục thực hiện, giá trị boolean (true/false), mặc định là false
            $table->text('category_implementation');

            // Cột lưu trữ thông tin về tối ưu server, giá trị boolean (true/false), mặc định là false
            $table->boolean('server_optimization')->default(false);

            // Cột lưu trữ thông tin về bảo mật server, giá trị boolean (true/false), mặc định là false
            $table->boolean('server_security')->default(false);

            // Cột lưu trữ thông tin về cấu hình backup, giá trị boolean (true/false), mặc định là false
            $table->boolean('c')->default(false);

            // Cột lưu trữ thông tin về chuyển dữ liệu website,
            $table->text('website_data_migration');

            // Cột lưu trữ thông tin về giám sát cơ bản, giá trị boolean (true/false), mặc định là false
            $table->boolean('basic_monitoring')->default(false);

            // Cột lưu trữ thông tin về giám sát chuyên sâu, giá trị boolean (true/false), mặc định là false
            $table->boolean('advanced_monitoring')->default(false);

            // Cột lưu trữ thông tin về báo cáo sự cố, giá trị boolean (true/false), mặc định là false
            $table->boolean('incident_reporting')->default(false);

            // Cột lưu trữ thông tin về báo cáo định kỳ bằng email, giá trị boolean (true/false), mặc định là false
            $table->boolean('periodic_reporting_by_email')->default(false);

            // Cột lưu trữ giá dịch vụ, kiểu dữ liệu decimal với 10 chữ số tối đa và 2 chữ số thập phân
            $table->decimal('price', 10, 2);

            // Tạo các cột timestamps (created_at, updated_at) để lưu trữ thời gian tạo và cập nhật bản ghi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sgo_service_pricing');
    }
};
