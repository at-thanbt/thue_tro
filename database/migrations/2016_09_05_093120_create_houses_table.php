<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('houses', function (Blueprint $table) {
              $table->increments('id');
              $table->integer('user_id')->unsigned();
              $table->foreign('user_id')
                    ->references('id')->on('users');
              $table->integer('category_id')->unsigned();
              $table->foreign('category_id')
                    ->references('id')->on('categories');
              $table->integer('number_room');
              $table->string('avatar')->default('default.png');
              $table->string('address', 255);
              $table->integer('price')->unsigned()->default(0);
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
          Schema::drop('houses');
    }
}
