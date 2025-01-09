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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('sent_by', 255)->default('system');
            $table->string('sent_to', 255)->default('customer');
            $table->string('title', 100)->nullable();
            $table->string('description', 191)->nullable();
            $table->integer('notification_count')->default(0);
            $table->string('image', 50)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
