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
        Schema::create('wallet_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->char('transaction_id', 36);
            $table->decimal('credit', 24, 3)->default(0.000);
            $table->decimal('debit', 24, 3)->default(0.000);
            $table->decimal('admin_bonus', 24, 3)->default(0.000);
            $table->decimal('balance', 24, 3)->default(0.000);
            $table->string('transaction_type', 191)->nullable();
            $table->string('payment_method', 255)->nullable();
            $table->string('reference', 191)->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet_transactions');
    }
};
