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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->unique();;
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brand');
            $table->string('product_price');
            $table->string('product_image');
            $table->integer('product_amount');
            $table->string('Staff');
            $table->string('Status');
            $table->string('product_des');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
