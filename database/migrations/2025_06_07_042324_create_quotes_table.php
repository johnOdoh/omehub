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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->decimal('insurance', 10, 2);
            $table->decimal('custom', 10, 2);
            $table->decimal('cost', 10, 2);
            $table->date('departure_date');
            $table->string('duration');
            $table->timestamps();
            // $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            // $table->string('from');
            // $table->string('to');
            // $table->decimal('full_container', 10, 2);
            // $table->decimal('half_container', 10, 2);
            // $table->decimal('volume', 10, 2);
            // $table->string('duration');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
