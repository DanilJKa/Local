<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketTovarTable extends Migration
{

    public function up()
    {
        Schema::create('basket_tovar', function (Blueprint $table) {
            $table->id();
            $table->integer('basket_id')
            ->references('id')
            ->on('baskets')
            ->cascadeOnDelete();
            $table->integer('tovar_id')
            ->references('id')
            ->on('tovar')
            ->cascadeOnDelete();
        });
    }


    public function down()
    {
        Schema::dropIfExists('basket_tovar');
    }
}