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
        Schema::create('payment_requests', function (Blueprint $table) {
            $table->char('id', 36)->primary(); // CHAR(36) NOT NULL, primary key
            $table->string('payer_id', 64)->nullable(); // VARCHAR(64) DEFAULT NULL
            $table->string('receiver_id', 64)->nullable(); // VARCHAR(64) DEFAULT NULL
            $table->decimal('payment_amount', 24, 2)->default(0.00); // DECIMAL(24,2) NOT NULL DEFAULT '0.00'
            $table->string('gateway_callback_url', 191)->nullable(); // VARCHAR(191) DEFAULT NULL
            $table->string('success_hook', 100)->nullable(); // VARCHAR(100) DEFAULT NULL
            $table->string('failure_hook', 100)->nullable(); // VARCHAR(100) DEFAULT NULL
            $table->string('transaction_id', 100)->nullable(); // VARCHAR(100) DEFAULT NULL
            $table->string('currency_code', 20)->default('USD'); // VARCHAR(20) NOT NULL DEFAULT 'USD'
            $table->string('payment_method', 50)->nullable(); // VARCHAR(50) DEFAULT NULL
            $table->longText('additional_data')->nullable(); // LONGTEXT DEFAULT NULL
            $table->boolean('is_paid')->default(false);
            $table->longText('payer_information')->nullable(); // LONGTEXT DEFAULT NULL
            $table->string('external_redirect_link', 255)->nullable(); // VARCHAR(255) DEFAULT NULL
            $table->longText('receiver_information')->nullable(); // LONGTEXT DEFAULT NULL
            $table->string('attribute_id', 64)->nullable(); // VARCHAR(64) DEFAULT NULL
            $table->string('attribute', 255)->nullable(); // VARCHAR(255) DEFAULT NULL
            $table->string('payment_platform', 255)->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_requests');
    }
};
