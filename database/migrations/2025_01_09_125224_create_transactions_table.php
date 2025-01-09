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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->nullable()->unique();
            $table->string('payment_for', 100)->nullable();
            $table->foreignId('payer_id')->nullable();
            $table->foreignId('payment_receiver_id')->nullable();
            $table->string('paid_by', 15)->nullable();
            $table->string('paid_to', 15)->nullable();
            $table->string('payment_method', 15)->nullable();
            $table->string('payment_status', 10)->default('success');
            $table->double('amount', 8, 2)->default(0.00);
            $table->string('transaction_type', 191)->nullable();
            $table->foreignId('order_details_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
