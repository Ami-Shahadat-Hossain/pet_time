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
        Schema::create('refund_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->nullable()->constrained('orders')->onDelete('cascade');
            $table->string('payment_for', 191)->nullable();
            $table->foreignId('payer_id')->nullable();
            $table->foreignId('payment_receiver_id')->nullable();
            $table->string('paid_by', 191)->nullable();
            $table->string('paid_to', 191)->nullable();
            $table->string('payment_method', 191)->nullable();
            $table->string('payment_status', 191)->nullable();
            $table->decimal('amount', 8, 2)->nullable();
            $table->string('transaction_type', 191)->nullable();
            $table->foreignId('order_details_id')->nullable()->constrained('order_details')->onDelete('cascade');
            $table->foreignId('refund_id')->nullable()->constrained('refund_requests')->onDelete('cascade');
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refund_transactions');
    }
};
