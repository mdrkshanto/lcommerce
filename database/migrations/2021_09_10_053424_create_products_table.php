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
            $table->id();
            $table->string('productName')->required();
            $table->integer('cetegoryId')->required();
            $table->integer('brandId')->required()->unique();
            $table->string('productModel')->required();
            $table->string('productColor')->nullable();
            $table->float('productRegularPrice')->nullable();
            $table->float('productDiscountPrice')->nullable();
            $table->text('productDetails')->required();
            $table->text('productShortDescription')->required();
            $table->text('productDescription')->required();
            $table->text('productDeliveryProcess')->required();
            $table->enum('productStatus',['1','2'])->required();
            $table->integer('updatedBy')->nullable();
            $table->integer('createdBy')->required();
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
