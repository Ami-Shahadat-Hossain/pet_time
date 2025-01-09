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
        Schema::create('deliveryman_notifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('delivery_man_id');
            $table->bigInteger('order_id');
            $table->string('description', 191);
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveryman_notifications');
    }
};
