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
            $table->string('productName')->nullable();
            $table->integer('cetegoryId')->nullable();
            $table->integer('brandId')->nullable();
            $table->string('productModel')->nullable();
            $table->float('productRegularPrice',10,2)->nullable();
            $table->float('productDiscountPrice',10,2)->nullable();
            $table->text('productDetails')->nullable();
            $table->text('productShortDescription')->nullable();
            $table->text('productDescription')->nullable();
            $table->text('productDeliveryProcess')->nullable();
            $table->enum('productStatus',['1','2'])->nullable();
            $table->string('createdBy')->nullable();
            $table->string('updatedBy')->nullable();
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
