<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 100);
            $table->foreignUuid('creator_id')->constrained('users')->cascadeOnDelete();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->json('tags')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('communities');
    }
};
