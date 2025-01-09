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
        Schema::create('loyalty_point_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->char('transaction_id', 36);
            $table->decimal('credit', 24, 3)->default(0.000);
            $table->decimal('debit', 24, 3)->default(0.000);
            $table->decimal('balance', 24, 3)->default(0.000);
            $table->string('reference', 191)->nullable();
            $table->string('transaction_type', 191)->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loyalty_point_transactions');
    }
};
