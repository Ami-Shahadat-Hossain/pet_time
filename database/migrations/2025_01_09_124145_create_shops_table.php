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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('seller_id')->unsigned();
            $table->string('name', 100);
            $table->string('address', 255);
            $table->string('contact', 25);
            $table->string('image', 30)->default('def.png');
            $table->string('bottom_banner', 191)->nullable();
            $table->string('offer_banner', 255)->nullable();
            $table->date('vacation_start_date')->nullable();
            $table->date('vacation_end_date')->nullable();
            $table->string('vacation_note', 255)->nullable();
            $table->tinyInteger('vacation_status')->default(0);
            $table->tinyInteger('temporary_close')->default(0);
            $table->string('banner', 191);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
