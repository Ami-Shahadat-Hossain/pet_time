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
        Schema::create('deliveryman_wallets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('delivery_man_id');
            $table->decimal('current_balance', 50, 2)->default(0.00);
            $table->decimal('cash_in_hand', 50, 2)->default(0.00);
            $table->decimal('pending_withdraw', 50, 2)->default(0.00);
            $table->decimal('total_withdraw', 50, 2)->default(0.00);
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveryman_wallets');
    }
};
