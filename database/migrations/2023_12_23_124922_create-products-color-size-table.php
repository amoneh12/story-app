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
      Schema::create('products-color-size', function (Blueprint $table) {
        $table->id();
        $table->integer('size_id')->unsigned();
        $table->integer('color_id')->unsigned();
        $table->foreign('color-id')->references('id')->on('products-color');
        $table->foreign('size-id')->references('id')->on('product-size');
        $table->integer('quantity');
        $table->decimal('price_two', 10, 2)->nullable();
        $table->decimal('discount', 10, 2)->nullable();
        $table->integer('status')->default(1);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('product_color_size');

    }
};
