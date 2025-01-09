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
        Schema::create('admin_wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->nullable()->constrained()->onDelete('set null'); // Foreign key reference to the admins table
            $table->double('inhouse_earning')->default(0);
            $table->double('withdrawn')->default(0);
            $table->double('commission_earned')->default(0);
            $table->double('delivery_charge_earned', 8, 2)->default(0.00);
            $table->double('pending_amount', 8, 2)->default(0.00);
            $table->double('total_tax_collected', 8, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_wallets');
    }
};
