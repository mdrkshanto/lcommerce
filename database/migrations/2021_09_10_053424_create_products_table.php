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
            $table->string('productName');
            $table->integer('cetegoryId');
            $table->integer('brandId');
            $table->string('productModel');
            $table->string('productColor');
            $table->float('productRegularPrice',10,2);
            $table->float('productDiscountPrice',10,2);
            $table->text('productDetails');
            $table->text('productShortDescription');
            $table->text('productDescription');
            $table->text('productDeliveryProcess');
            $table->enum('productStatus',['1','2']);
            $table->integer('updatedBy');
            $table->integer('createdBy');
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
