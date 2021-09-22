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
            $table->float('categoryId')->nullable();
            $table->float('brandId')->nullable();
            $table->string('model')->nullable();
            $table->string('regularPrice')->nullable();
            $table->string('discountPrice')->nullable();
            $table->string('details')->nullable();
            $table->string('shortDescription')->nullable();
            $table->string('description')->nullable();
            $table->string('deliveryProcess')->nullable();
            $table->enum('status',['0','1'])->nullable();
            $table->string('createdBy')->nullable();
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
