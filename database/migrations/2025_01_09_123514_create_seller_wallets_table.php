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
        Schema::create('seller_wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->nullable()->constrained('sellers')->onDelete('cascade');
            $table->double('total_earning', 8, 2)->default(0);
            $table->double('withdrawn', 8, 2)->default(0);
            $table->double('commission_given', 8, 2)->default(0.00);
            $table->double('pending_withdraw', 8, 2)->default(0.00);
            $table->double('delivery_charge_earned', 8, 2)->default(0.00);
            $table->double('collected_cash', 8, 2)->default(0.00);
            $table->double('total_tax_collected', 8, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller_wallets');
    }
};
