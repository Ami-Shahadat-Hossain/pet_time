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
        Schema::create('paytabs_invoices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id')->unsigned(); // BIGINT UNSIGNED
            $table->text('result'); // TEXT
            $table->unsignedInteger('response_code'); // INT UNSIGNED
            $table->unsignedInteger('pt_invoice_id')->nullable(); // INT UNSIGNED DEFAULT NULL
            $table->double('amount', 8, 2)->nullable(); // DOUBLE(8,2) DEFAULT NULL
            $table->string('currency', 191)->nullable(); // VARCHAR(191) DEFAULT NULL
            $table->unsignedInteger('transaction_id')->nullable(); // INT UNSIGNED DEFAULT NULL
            $table->string('card_brand', 191)->nullable(); // VARCHAR(191) DEFAULT NULL
            $table->unsignedInteger('card_first_six_digits')->nullable(); // INT UNSIGNED DEFAULT NULL
            $table->unsignedInteger('card_last_four_digits')->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paytabs_invoices');
    }
};
