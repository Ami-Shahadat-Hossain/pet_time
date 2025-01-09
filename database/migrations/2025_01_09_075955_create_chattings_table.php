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
        Schema::create('chattings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->unsignedBigInteger('delivery_man_id')->nullable();
            $table->text('message')->nullable();
            $table->longText('attachment')->nullable();
            $table->tinyInteger('sent_by_customer')->default(0);
            $table->tinyInteger('sent_by_seller')->default(0);
            $table->tinyInteger('sent_by_admin')->nullable();
            $table->tinyInteger('sent_by_delivery_man')->nullable();
            $table->tinyInteger('seen_by_customer')->default(1);
            $table->tinyInteger('seen_by_seller')->default(1);
            $table->tinyInteger('seen_by_admin')->nullable();
            $table->tinyInteger('seen_by_delivery_man')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chattings');
    }
};
