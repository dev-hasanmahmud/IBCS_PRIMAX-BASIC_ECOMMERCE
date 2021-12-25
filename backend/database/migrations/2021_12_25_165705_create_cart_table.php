<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('product_id');
            $table->string('product_title');
            $table->longText('product_description');
            $table->decimal('product_price', 10,2);
            $table->string('product_logo');
            $table->bigInteger('no_of_items');
            $table->decimal('total_amount', 10,2);
            $table->tinyInteger('delete_flag');
            $table->integer('order_status')->default(1); //pending
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
        Schema::dropIfExists('cart');
    }
}
