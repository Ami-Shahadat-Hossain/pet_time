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
        Schema::create('delivery_man_transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('delivery_man_id'); // Corresponds to `delivery_man_id` as BIGINT
            $table->bigInteger('user_id'); // Corresponds to `user_id` as BIGINT
            $table->string('user_type', 20); // Corresponds to `user_type` as VARCHAR(20)
            $table->char('transaction_id', 36); // Corresponds to `transaction_id` as CHAR(36)
            $table->decimal('debit', 50, 2)->default(0.00); // Corresponds to `debit` as DECIMAL(50,2)
            $table->decimal('credit', 50, 2)->default(0.00); // Corresponds to `credit` as DECIMAL(50,2)
            $table->string('transaction_type', 20);
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_man_transactions');
    }
};
