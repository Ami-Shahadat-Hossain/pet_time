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
        Schema::create('digital_product_otp_verifications', function (Blueprint $table) {
            $table->id();
            $table->string('order_details_id', 255)->nullable();
            $table->string('identity', 255)->nullable();
            $table->string('token', 255)->nullable();
            $table->tinyInteger('otp_hit_count')->default(0);
            $table->tinyInteger('is_temp_blocked')->default(0);
            $table->timestamp('temp_block_time')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('digital_product_otp_verifications');
    }
};
