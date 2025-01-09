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
        Schema::create('phone_or_email_verifications', function (Blueprint $table) {
            $table->id();
            $table->string('phone_or_email', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->string('token', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->string('request_id', 255)->nullable(); // VARCHAR(255) NULLABLE
            $table->tinyInteger('otp_hit_count')->default(0); // Default 0
            $table->boolean('is_temp_blocked')->default(0); // Default 0
            $table->timestamp('temp_block_time')->nullable(); // TIMESTAMP NULL
            $table->timestamp('expires_at')->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phone_or_email_verifications');
    }
};
