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
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->string('translationable_type', 191); // For storing type (polymorphic)
            $table->foreignId('translationable_id')->constrained()->onDelete('cascade'); // Foreign key for polymorphic relationship
            $table->string('locale', 191); // Locale field (e.g. en, fr, etc.)
            $table->string('key', 191)->nullable(); // Translation key
            $table->text('value')->nullable(); // Translation value
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
