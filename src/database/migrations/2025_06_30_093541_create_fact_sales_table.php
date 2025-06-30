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
        Schema::create('fact_sales', function (Blueprint $table) {
            $table->id();
            $table->char('date_id', 8);
            $table->foreign('date_id')->references('id')->on('dim_dates');

            $table->foreignId('product_id')->constrained('dim_products');
            $table->foreignId('customer_id')->constrained('dim_customers');
            $table->foreignId('store_id')->constrained('dim_stores');
            $table->foreignId('staff_id')->constrained('dim_staff');

            $table->integer('quantity_sold');
            $table->decimal('total_price', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fact_sales');
    }
};
