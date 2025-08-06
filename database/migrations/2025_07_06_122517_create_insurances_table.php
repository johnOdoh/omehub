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
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('logo');
            $table->string('phone');
            $table->string('address');
            $table->string('zip');
            $table->string('city');
            $table->string('country');
            $table->string('dial_code');
            $table->string('reg_no');
            $table->boolean('is_verified')->default(false);
            $table->string('document')->nullable();
            $table->unsignedSmallInteger('rating')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurances');
    }
};
