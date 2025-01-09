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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('f_name', 30)->nullable();
            $table->string('l_name', 30)->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('image', 30)->default('def.png');
            $table->string('email', 80)->unique();
            $table->string('password', 80)->nullable();
            $table->string('status', 15)->default('pending');
            $table->string('remember_token', 100)->nullable();
            $table->string('bank_name', 191)->nullable();
            $table->string('branch', 191)->nullable();
            $table->string('account_no', 191)->nullable();
            $table->string('holder_name', 191)->nullable();
            $table->text('auth_token')->nullable();
            $table->double('sales_commission_percentage', 8, 2)->nullable();
            $table->string('gst', 191)->nullable();
            $table->string('cm_firebase_token', 191)->nullable();
            $table->tinyInteger('pos_status')->default(0);
            $table->double('minimum_order_amount', 8, 2)->default(0.00);
            $table->integer('free_delivery_status')->default(0);
            $table->double('free_delivery_over_amount', 8, 2)->default(0.00);
            $table->string('app_language', 191)->default('en');
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
