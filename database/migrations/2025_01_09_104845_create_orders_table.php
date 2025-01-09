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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id', 15)->nullable();
            $table->boolean('is_guest')->default(false);
            $table->string('customer_type', 10)->nullable();
            $table->string('payment_status', 15)->default('unpaid');
            $table->string('order_status', 50)->default('pending');
            $table->string('payment_method', 100)->nullable();
            $table->string('transaction_ref', 30)->nullable();
            $table->string('payment_by')->nullable();
            $table->text('payment_note')->nullable();
            $table->double('order_amount')->default(0);
            $table->decimal('admin_commission', 8, 2)->default(0.00);
            $table->string('is_pause', 20)->default('0');
            $table->string('cause')->nullable();
            $table->text('shipping_address')->nullable();
            $table->double('discount_amount')->default(0);
            $table->string('discount_type', 30)->nullable();
            $table->string('coupon_code')->nullable();
            $table->string('coupon_discount_bearer')->default('inhouse');
            $table->string('shipping_responsibility')->nullable();
            $table->unsignedBigInteger('shipping_method_id')->default(0);
            $table->decimal('shipping_cost', 8, 2)->default(0.00);
            $table->boolean('is_shipping_free')->default(false);
            $table->string('order_group_id')->default('def-order-group');
            $table->string('verification_code')->default('0');
            $table->boolean('verification_status')->default(false);
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->string('seller_is')->nullable();
            $table->text('shipping_address_data')->nullable();
            $table->unsignedBigInteger('delivery_man_id')->nullable();
            $table->double('deliveryman_charge')->default(0);
            $table->date('expected_delivery_date')->nullable();
            $table->text('order_note')->nullable();
            $table->unsignedBigInteger('billing_address')->nullable();
            $table->text('billing_address_data')->nullable();
            $table->string('order_type')->default('default_type');
            $table->decimal('extra_discount', 8, 2)->default(0.00);
            $table->string('extra_discount_type')->nullable();
            $table->string('free_delivery_bearer')->nullable();
            $table->boolean('checked')->default(false);
            $table->string('shipping_type')->nullable();
            $table->string('delivery_type')->nullable();
            $table->string('delivery_service_name')->nullable();
            $table->string('third_party_delivery_tracking_id')->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
