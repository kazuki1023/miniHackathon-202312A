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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('rikou')->nullable(false);
            $table->integer('kei')->nullable(false);
            $table->integer('shou')->nullable(false);
            $table->integer('bun')->nullable(false);
            $table->integer('hou')->nullable(false);
            $table->integer('sfc')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
