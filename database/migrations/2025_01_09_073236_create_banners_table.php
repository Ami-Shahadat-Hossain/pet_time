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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('photo', 255)->nullable(); // Column for the banner photo (optional)
            $table->string('banner_type', 255); // Column for the banner type
            $table->string('theme', 255)->default('default'); // Column for the banner theme with default value 'default'
            $table->integer('published')->default(0);
            $table->string('url', 255)->nullable(); // Column for the URL (optional)
            $table->string('resource_type', 191)->nullable(); // Column for the resource type (optional)
            $table->bigInteger('resource_id')->nullable(); // Column for the resource ID (optional)
            $table->string('title', 191)->nullable(); // Column for the title (optional)
            $table->string('sub_title', 191)->nullable(); // Column for the subtitle (optional)
            $table->string('button_text', 191)->nullable(); // Column for the button text (optional)
            $table->string('background_color', 191)->nullable();

            // Index for resource_id
            // $table->index('resource_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
