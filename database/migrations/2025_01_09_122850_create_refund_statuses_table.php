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
        Schema::create('refund_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('refund_request_id')->nullable()->constrained('refund_requests')->onDelete('cascade');
            $table->string('change_by', 191)->nullable();
            $table->foreignId('change_by_id')->nullable();
            $table->string('status', 191)->nullable();
            $table->longText('message')->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refund_statuses');
    }
};
