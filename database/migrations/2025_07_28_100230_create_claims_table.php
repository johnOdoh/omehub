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
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('defendant_id')->constrained('users')->onDelete('cascade');
            $table->string('subject');
            $table->text('body');
            $table->enum('status', ['ongoing', 'resolved'])->default('ongoing');
            $table->enum('chat', ['closed', 'defendant', 'complainant', 'both'])->default('defendant');
            $table->json('attachments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('claims');
    }
};
