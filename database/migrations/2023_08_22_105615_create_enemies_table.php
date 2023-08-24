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
        Schema::create('enemies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('hp');
            $table->integer('atq');
            $table->integer('def');
            $table->integer('coins');
            $table->integer('xp');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enemies');
    }
};
