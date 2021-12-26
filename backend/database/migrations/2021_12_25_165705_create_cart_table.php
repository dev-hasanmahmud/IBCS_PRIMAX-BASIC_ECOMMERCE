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
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->string('product_title')->nullable();
            $table->longText('product_description')->nullable();
            $table->decimal('product_price', 10,2)->nullable();
            $table->string('product_logo')->nullable();
            $table->bigInteger('no_of_items')->nullable();
            $table->decimal('total_amount', 10,2)->default(0);
            $table->tinyInteger('delete_flag')->nullable();
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
