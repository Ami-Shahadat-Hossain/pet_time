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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80)->nullable();
            $table->string('phone', 25)->nullable();
            $table->bigInteger('admin_role_id')->default(2);
            $table->string('image', 30)->default('def.png');
            $table->text('identify_image')->nullable();
            $table->string('identify_type', 255)->nullable();
            $table->integer('identify_number')->nullable();
            $table->string('email', 80)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 80);
            $table->string('remember_token', 100)->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
