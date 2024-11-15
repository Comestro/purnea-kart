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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->foreignId('color_variant_id')->nullable()->constrained('product_variants')->onDelete('cascade');
            $table->foreignId('size_variant_id')->nullable()->constrained('product_variants')->onDelete('cascade');
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            // $table->boolean('isOrdered')->default(0);

            $table->integer('quantity')->default(1); // Set default quantity to 1
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
