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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('pickup');
            $table->string('destination');
            $table->string('cargo_type');
            $table->string('freight_type');
            $table->string('hs_code');
            $table->string('incoterm');
            $table->boolean('needs_insurance');
            $table->string('currency');
            $table->string('container_type');
            $table->string('dimensions');
            $table->boolean('is_closed')->default(false);
            $table->timestamp('expires_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
