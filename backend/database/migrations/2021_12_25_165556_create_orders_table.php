<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('b_name');
            $table->text('b_address');
            $table->string('b_city');
            $table->string('b_state');
            $table->string('b_country');
            $table->string('b_mobile');
            $table->string('b_email');
            $table->string('s_name');
            $table->string('s_address');
            $table->string('s_city');
            $table->string('s_state');
            $table->string('s_country');
            $table->string('s_mobile');
            $table->string('s_email');
            $table->double('total_amount', 10, 2);
            $table->string('name_in_card');
            $table->string('cart_type');
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
        Schema::dropIfExists('orders');
    }
}
