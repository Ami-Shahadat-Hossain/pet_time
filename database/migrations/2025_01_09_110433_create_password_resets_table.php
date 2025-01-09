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
        Schema::create('password_resets', function (Blueprint $table) {
            $table->id();
            $table->string('identity', 191); // VARCHAR(191) NOT NULL
            $table->string('token', 191)->nullable(); // VARCHAR(191) DEFAULT NULL
            $table->tinyInteger('otp_hit_count')->default(0); // TINYINT NOT NULL DEFAULT '0'
            $table->boolean('is_temp_blocked')->default(false); // TINYINT(1) NOT NULL DEFAULT '0'
            $table->string('request_id', 255); // VARCHAR(255) NOT NULL
            $table->timestamp('temp_block_time')->nullable(); // TIMESTAMP NULL DEFAULT NULL
            $table->timestamp('expires_at')->nullable(); // TIMESTAMP NULL DEFAULT NULL
            $table->string('user_type', 191)->default('customer');
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_resets');
    }
};
