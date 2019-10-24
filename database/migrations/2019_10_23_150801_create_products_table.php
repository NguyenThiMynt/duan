<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image');
            $table->double('price');
            $table->integer('quantity');
            $table->text('content');
            $table->longText('description');
            $table->string('price_sale');
            $table->integer('id_product_type')->unsigned();
//            $table->foreign('id_product_type')->references('id')->on('productypes')->onDelete('cascade');
            $table->integer('id_category')->unsigned();
//            $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');
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
}
