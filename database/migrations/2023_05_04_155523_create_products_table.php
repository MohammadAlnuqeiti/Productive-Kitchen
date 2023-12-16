<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->text('short_description');
            $table->text('long_description');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->decimal('price');
            $table->decimal('price_discount')->default(0);
            $table->boolean('is_sale')->default(0);
            $table->integer('discount')->default(0);
            $table->integer('duration_of_product_recommendation')->default(0);
            $table->boolean('is_active')->default(0);
            $table->integer('is_feature')->default(0);
            $table->integer('store')->nullable();
            $table->integer('sold')->nullable();
            $table->integer('rate_count')->nullable();
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};


