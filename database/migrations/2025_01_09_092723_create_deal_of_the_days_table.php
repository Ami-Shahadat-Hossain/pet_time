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
        Schema::create('deal_of_the_days', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150)->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->decimal('discount', 8, 2)->default(0.00);
            $table->string('discount_type', 12)->default('amount');
            $table->tinyInteger('status')->default(0);
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal_of_the_days');
    }
};
