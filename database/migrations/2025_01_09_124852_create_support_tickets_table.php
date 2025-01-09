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
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained()->onDelete('set null');
            $table->string('subject', 150)->nullable();
            $table->string('type', 50)->nullable();
            $table->string('priority', 15)->default('low');
            $table->string('description', 255)->nullable();
            $table->longText('attachment')->nullable();
            $table->string('reply', 255)->nullable();
            $table->string('status', 15)->default('open');
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('support_tickets');
    }
};
