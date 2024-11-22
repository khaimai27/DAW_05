<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rate', function (Blueprint $table) {
            $table->id();
            $table->foreignId("product_id")->constrained("products");
            $table->foreignId('capacity_id')->constrained('capacity');
            $table->foreignId('color_id')->constrained('colors');
            $table->foreignId("customer_id")->constrained("customer");
            $table->integer("star")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rate');
    }
};
