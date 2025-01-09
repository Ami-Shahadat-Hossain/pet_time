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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('added_by', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->bigInteger('user_id')->nullable(); // BIGINT NULLABLE
            $table->string('name', 80)->nullable(); // VARCHAR(80) NULLABLE
            $table->string('slug', 120)->nullable(); // VARCHAR(120) NULLABLE
            $table->string('product_type', 20)->default('physical'); // VARCHAR(20) Default 'physical'
            $table->string('category_ids', 160)->nullable(); // VARCHAR(160) NULLABLE
            $table->string('category_id', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->string('sub_category_id', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->string('sub_sub_category_id', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->bigInteger('brand_id')->nullable(); // BIGINT NULLABLE
            $table->string('unit', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->integer('min_qty')->default(1); // INT Default 1
            $table->boolean('refundable')->default(true); // TINYINT(1) Default 1
            $table->string('digital_product_type', 30)->nullable(); // VARCHAR(30) NULLABLE
            $table->string('digital_file_ready', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->longText('images')->nullable(); // LONGTEXT NULLABLE
            $table->text('color_image')->nullable(); // TEXT NULLABLE
            $table->string('thumbnail', 255)->nullable(); // VARCHAR(255) NULLABLE
            $table->string('featured', 255)->nullable(); // VARCHAR(255) NULLABLE
            $table->string('flash_deal', 255)->nullable(); // VARCHAR(255) NULLABLE
            $table->string('video_provider', 30)->nullable(); // VARCHAR(30) NULLABLE
            $table->string('video_url', 150)->nullable(); // VARCHAR(150) NULLABLE
            $table->string('colors', 150)->nullable(); // VARCHAR(150) NULLABLE
            $table->boolean('variant_product')->default(false); // TINYINT(1) Default 0
            $table->string('attributes', 255)->nullable(); // VARCHAR(255) NULLABLE
            $table->text('choice_options')->nullable(); // TEXT NULLABLE
            $table->text('variation')->nullable(); // TEXT NULLABLE
            $table->boolean('published')->default(false); // TINYINT(1) Default 0
            $table->double('unit_price')->default(0); // DOUBLE Default 0
            $table->double('purchase_price')->default(0); // DOUBLE Default 0
            $table->string('tax', 191)->default('0.00'); // VARCHAR(191) Default '0.00'
            $table->string('tax_type', 80)->nullable(); // VARCHAR(80) NULLABLE
            $table->string('tax_model', 20)->default('exclude'); // VARCHAR(20) Default 'exclude'
            $table->string('discount', 191)->default('0.00'); // VARCHAR(191) Default '0.00'
            $table->string('discount_type', 80)->nullable(); // VARCHAR(80) NULLABLE
            $table->integer('current_stock')->nullable(); // INT NULLABLE
            $table->integer('minimum_order_qty')->default(1); // INT Default 1
            $table->text('details')->nullable(); // TEXT NULLABLE
            $table->boolean('free_shipping')->default(false); // TINYINT(1) Default 0
            $table->string('attachment', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->tinyInteger('status')->default(1); // TINYINT(1) Default 1
            $table->tinyInteger('featured_status')->default(1); // TINYINT(1) Default 1
            $table->string('meta_title', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->string('meta_description', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->string('meta_image', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->tinyInteger('request_status')->default(0); // TINYINT(1) Default 0
            $table->string('denied_note', 191)->nullable(); // VARCHAR(191) NULLABLE
            $table->double('shipping_cost', 8, 2)->nullable(); // DOUBLE(8,2) NULLABLE
            $table->boolean('multiply_qty')->nullable(); // TINYINT(1) NULLABLE
            $table->double('temp_shipping_cost', 8, 2)->nullable(); // DOUBLE(8,2) NULLABLE
            $table->boolean('is_shipping_cost_updated')->nullable(); // TINYINT(1) NULLABLE
            $table->string('code', 191)->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
