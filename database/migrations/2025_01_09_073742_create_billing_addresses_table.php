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
        Schema::create('billing_addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id')->unsigned()->nullable();
            $table->string('contact_person_name', 191)->nullable();
            $table->string('address_type', 191)->nullable();
            $table->string('address', 191)->nullable();
            $table->string('city', 191)->nullable();
            $table->string('zip', 191)->nullable();
            $table->string('phone', 191)->nullable();
            $table->string('state', 191)->nullable();
            $table->string('country', 191)->nullable();
            $table->string('latitude', 191)->nullable();
            $table->string('longitude', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_addresses');
    }
};
