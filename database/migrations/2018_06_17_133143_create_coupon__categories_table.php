<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon__categories', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('category_id');
            $table->integer('coupon_id');
            $table->timestamps();
            $table->foreign('category_id')->referances('id')->on('categories');
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
        Schema::dropIfExists('coupon__categories');
    }
}
