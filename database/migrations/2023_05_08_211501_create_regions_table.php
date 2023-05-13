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
        Schema::create('regions', function (Blueprint $table) {
            $table->id()->unsigned()->autoIncrement();
            $table->string('name',255);
            $table->string('slug',255);
            $table->tinyInteger('status')->default(1);
            $table->string('image',255)->nullable();
            $table->bigInteger('parent_id')->nullable();
            $table->tinyInteger('is_main');
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
        Schema::dropIfExists('regions');
    }
};
