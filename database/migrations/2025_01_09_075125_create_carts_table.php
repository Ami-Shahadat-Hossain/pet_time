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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id')->nullable();
            $table->string('cart_group_id', 191)->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->string('product_type', 20)->default('physical');
            $table->string('digital_product_type', 30)->nullable();
            $table->string('color', 191)->nullable();
            $table->text('choices')->nullable();
            $table->text('variations')->nullable();
            $table->text('variant')->nullable();
            $table->integer('quantity')->default(1);
            $table->double('price')->default(1);
            $table->double('tax')->default(1);
            $table->double('discount')->default(1);
            $table->string('tax_model', 20)->default('exclude');
            $table->string('slug', 191)->nullable();
            $table->string('name', 191)->nullable();
            $table->string('thumbnail', 191)->nullable();
            $table->bigInteger('seller_id')->nullable();
            $table->string('seller_is', 191)->default('admin');
            $table->string('shop_info', 191)->nullable();
            $table->double('shipping_cost', 8, 2)->nullable();
            $table->string('shipping_type', 191)->nullable();
            $table->boolean('is_guest')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
