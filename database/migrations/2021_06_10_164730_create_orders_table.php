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
            $table->id();

            $table->string('comments')->nullable();

            $table->foreignId('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->decimal('total',9,2,);
            $table->enum('state',['A','I'])->default('A');


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
