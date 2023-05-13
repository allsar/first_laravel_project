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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('slug',255)->nullable();
            $table->longText('description')->nullable();
            $table->longText('short_description')->nullable();
            $table->decimal('price',25,2)->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('manufacturer_id')->nullable();
            $table->longText('image')->nullable();
            $table->tinyInteger('status')->default(1)->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('store_id');
            $table->enum('currency',['usd','uzs'])->nullable();
            $table->integer('quantity')->nullable();
            $table->bigInteger('parent_id');
            $table->timestamps();
        });
    }
// name, , image, status, user_id, store_id, currency, quantity, parent_id
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
