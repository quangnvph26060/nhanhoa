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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('company_name')->nullable();
            $table->string('address')->nullable();
            $table->string('google_id')->nullable();
            $table->string('token')->nullable();
            $table->timestamp('token_expiry')->nullable();
            $table->string('avatar')->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('company_name');
            $table->dropColumn('address');
            $table->dropColumn('google_id');
            $table->dropColumn('token');
            $table->dropColumn('token_expiry');
            $table->dropColumn('avatar');
            $table->dropColumn('role_id');
        });
    }
};
