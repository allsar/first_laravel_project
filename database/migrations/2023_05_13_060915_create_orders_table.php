<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->bigInteger('user_id');
            $table->bigInteger('region_id')->nullable();
            $table->bigInteger('address_id')->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('warehouse_id')->nullable();
            $table->string('payment_type')->nullable();
            $table->bigInteger('district_id')->nullable();
            $table->string('street')->nullable();
            $table->string('apartment')->nullable();
            $table->string('floor')->nullable();
            $table->bigInteger('delivery_id')->nullable();
            $table->string('delivery_price')->nullable();
            $table->string('total_cost')->nullable();
            $table->string('total_amount')->nullable();
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
};
