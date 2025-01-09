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
        Schema::create('delivery_histories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->nullable(); // Corresponds to `order_id` as BIGINT
            $table->bigInteger('deliveryman_id')->nullable(); // Corresponds to `deliveryman_id` as BIGINT
            $table->dateTime('time')->nullable(); // Corresponds to `time` as DATETIME
            $table->string('longitude', 191)->nullable(); // Corresponds to `longitude` as VARCHAR(191)
            $table->string('latitude', 191)->nullable(); // Corresponds to `latitude` as VARCHAR(191)
            $table->string('location', 191)->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_histories');
    }
};
