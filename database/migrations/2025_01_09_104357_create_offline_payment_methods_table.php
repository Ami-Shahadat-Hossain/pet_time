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
        Schema::create('offline_payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('method_name', 255);
            $table->text('method_fields');
            $table->text('method_informations');
            $table->tinyInteger('status')->default(0);
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offline_payment_methods');
    }
};
