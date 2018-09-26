<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->integer('id',true,false);
            $table->string('name');
            $table->string('code');
            $table->integer('discount');
            $table->string('shipping');
            $table->decimal('total')->nullable();
            $table->string('type');
            $table->dateTime('date_start');
            $table->dateTime('end');
            $table->boolean('status');
            $table->integer('product_id');
            $table->integer('category_id');
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
        Schema::dropIfExists('coupons');
    }
}
