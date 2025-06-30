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
        Schema::create('dim_dates', function (Blueprint $table) {
            $table->char('id', 8)->primary(); // Ganti dari $table->id()
            $table->tinyInteger('day');
            $table->tinyInteger('month');
            $table->string('month_name');
            $table->tinyInteger('quarter');
            $table->smallInteger('year');
            $table->string('day_name');
            $table->boolean('is_weekend');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dim_dates');
    }
};
