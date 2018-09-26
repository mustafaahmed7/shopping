<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon__products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('coupon_id');
            $table->timestamps();
            $table->foreign('product_id')->referances('id')->on('products');
            $table->foreign('coupon_id')->referances('id')->on('coupons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon__products');
    }
}
