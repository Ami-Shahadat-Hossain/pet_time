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
        Schema::create('order_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id'); // BIGINT NOT NULL
            $table->unsignedBigInteger('order_id'); // BIGINT NOT NULL
            $table->decimal('order_amount', 50, 2)->default(0.00); // DECIMAL(50,2) NOT NULL DEFAULT '0.00'
            $table->decimal('seller_amount', 50, 2)->default(0.00); // DECIMAL(50,2) NOT NULL DEFAULT '0.00'
            $table->decimal('admin_commission', 50, 2)->default(0.00); // DECIMAL(50,2) NOT NULL DEFAULT '0.00'
            $table->string('received_by', 191); // VARCHAR(191) NOT NULL
            $table->string('status', 191)->nullable(); // VARCHAR(191) DEFAULT NULL
            $table->decimal('delivery_charge', 50, 2)->default(0.00); // DECIMAL(50,2) NOT NULL DEFAULT '0.00'
            $table->decimal('tax', 50, 2)->default(0.00);
            $table->unsignedBigInteger('customer_id')->nullable(); // BIGINT DEFAULT NULL
            $table->string('seller_is', 191)->nullable(); // VARCHAR(191) DEFAULT NULL
            $table->string('delivered_by', 191)->default('admin'); // VARCHAR(191) NOT NULL DEFAULT 'admin'
            $table->string('payment_method', 191)->nullable(); // VARCHAR(191) DEFAULT NULL
            $table->string('transaction_id', 191)->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_transactions');
    }
};
