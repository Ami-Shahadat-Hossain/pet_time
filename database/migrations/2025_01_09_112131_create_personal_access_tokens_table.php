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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('tokenable_type', 191); // VARCHAR(191) NOT NULL
            $table->unsignedBigInteger('tokenable_id'); // BIGINT UNSIGNED NOT NULL
            $table->string('name', 191); // VARCHAR(191) NOT NULL
            $table->string('token', 64); // VARCHAR(64) NOT NULL
            $table->text('abilities')->nullable(); // TEXT, can be NULL
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
