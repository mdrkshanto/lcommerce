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
            $table->string('productCetegory')->required();
            $table->string('productBrand')->required();
            $table->string('productColor')->nullable();
            $table->numeric('productRegularPrice')->nullable();
            $table->numeric('productDiscountPrice')->nullable();
            $table->text('productDetails')->required();
            $table->text('productShortDescription')->required();
            $table->text('productDescription')->required();
            $table->text('productDeliveryProcess')->required();
            $table->string('productImages')->nullable();
            $table->string('productStatus')->required();
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
