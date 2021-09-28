<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_promos', function (Blueprint $table) {
            $table->id();
            $table->string('p_product_name');
            $table->string('p_product_description');
            $table->integer('p_product_price');
            $table->string('p_product_shop');
            $table->string('p_product_category');
            $table->string('p_product_city');
            $table->integer('p_product_status');
            $table->string('p_product_image'); $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_promos');
    }
}
