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
        Schema::create('delivery_men', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('seller_id')->nullable();
            $table->string('f_name', 100)->nullable();
            $table->string('l_name', 100)->nullable();
            $table->text('address')->nullable();
            $table->string('country_code', 20)->nullable();
            $table->string('phone', 20);
            $table->string('email', 100)->nullable();
            $table->string('identity_number', 30)->nullable();
            $table->string('identity_type', 50)->nullable();
            $table->string('identity_image', 191)->nullable();
            $table->string('image', 100)->nullable();
            $table->string('password', 100);
            $table->string('bank_name', 191)->nullable();
            $table->string('branch', 191)->nullable();
            $table->string('account_no', 191)->nullable();
            $table->string('holder_name', 191)->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_online')->default(true);
            $table->string('auth_token', 191)->default('6yIRXJRRfp78qJsAoKZZ6TTqhzuNJ3TcdvPBmk6n');
            $table->string('fcm_token', 191)->nullable();
            $table->string('app_language', 191)->default('en');
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_men');
    }
};
