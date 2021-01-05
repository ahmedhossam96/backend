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

            Schema::disableForeignKeyConstraints();

            $table->bigIncrements('product_id');

            $table->unsignedBigInteger('shop_id');
          

            $table->string('productname');

            $table->string('productcategory');
            $table->string('product_type');
            $table->string('color');
            $table->unsignedInteger('stock')->default(0);
            $table->unsignedFloat('price');
            $table->unsignedFloat('priceafterdiscount');
            $table->longText('description')->nullable();
           $table->unsignedFloat('discountpercentage');
            $table->string('image')->nullable();
           
            $table->softDeletes();
            $table->timestamps();

            Schema::enableForeignKeyConstraints();

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
