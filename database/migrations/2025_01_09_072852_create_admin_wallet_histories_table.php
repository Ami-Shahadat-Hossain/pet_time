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
        Schema::create('admin_wallet_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id')->nullable()->constrained()->onDelete('set null'); // Foreign key reference to the admins table
            $table->double('amount')->default(0);
            $table->foreignId('order_id')->nullable()->constrained()->onDelete('set null'); // Foreign key reference to the orders table
            $table->foreignId('product_id')->nullable()->constrained()->onDelete('set null'); // Foreign key reference to the products table
            $table->string('payment')->default('received');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_wallet_histories');
    }
};
