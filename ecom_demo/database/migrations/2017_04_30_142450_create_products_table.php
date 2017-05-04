<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('seller_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->string('title', 100);
            $table->string('author', 100);
            $table->string('publisher', 100);
            $table->unsignedInteger('no_pages');
            $table->unsignedInteger('price');
            $table->string('condition', 50);
            $table->string('promotion', 511);
            $table->integer('quantity');
            $table->boolean('in_stock');
            $table->timestamps();
        });

        Schema::rename('products','books');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
