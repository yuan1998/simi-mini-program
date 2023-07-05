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
            $table->string('title')->comment("商品名称");
            $table->string('sku')->unique()->index()->comment("商品SKU");
            $table->integer("view")->default(0);
            $table->integer("sell")->default(0);
            $table->integer("store")->default(0);
            $table->integer("price")->default(0);
            $table->integer("order")->default(0);
            $table->boolean("enable")->default(1);
            $table->text("content")->nullable();
            $table->string("cover")->nullable();
            $table->json("images")->nullable();
            $table->timestamps();
        });

        Schema::create("category_has_products" , function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
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
        Schema::dropIfExists('category_has_products');
    }
};
