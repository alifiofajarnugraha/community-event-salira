<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('communities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->string('accent')->nullable();
            $table->json('tags')->nullable();
            $table->text('description')->nullable();
            $table->string('members')->nullable();
            $table->integer('posts_today')->default(0);
            $table->integer('member_count')->default(0);
            $table->boolean('is_joined')->default(false);
            $table->string('subtitle')->nullable();
            $table->string('event_tag')->nullable();
            $table->string('cover')->nullable();
            $table->string('location')->nullable();
            $table->string('date')->nullable();
            $table->text('long_description')->nullable();
            $table->json('activities')->nullable();
            $table->json('related')->nullable();
            $table->json('statistics')->nullable();
            $table->json('moderators')->nullable();
            $table->json('rules')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('communities');
    }
};
