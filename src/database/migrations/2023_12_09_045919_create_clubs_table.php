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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('サークル名');
            $table->string('frequency')->nullable()->comment('活動頻度');
            $table->string('place')->nullable()->comment('活動場所');
            $table->json('gender_ratio_array')->nullable()->comment('男女比');
            $table->json('department_ratio_array')->nullable()->comment('学部比');
            $table->string('instagram_url')->nullable()->comment('Instagramリンク');
            $table->string('twitter_url')->nullable()->comment('Twitterリンク');
            $table->string('line_url')->nullable()->comment('LINEリンク');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clubs');
    }
};
