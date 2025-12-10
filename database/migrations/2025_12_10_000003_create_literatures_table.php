<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('literatures', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author')->nullable();
            $table->string('cover')->nullable();
            $table->decimal('rating', 3, 1)->nullable();
            $table->text('description')->nullable();
            $table->string('year_edition')->nullable();
            $table->unsignedInteger('total_bookmarked')->default(0);
            $table->json('tags')->nullable();
            $table->json('copy_types')->nullable();
            $table->string('licensing_type')->nullable();
            $table->json('sources')->nullable();
            $table->json('twitter_embeds')->nullable();
            $table->json('related_posts')->nullable();
            $table->string('community_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('literatures');
    }
};
