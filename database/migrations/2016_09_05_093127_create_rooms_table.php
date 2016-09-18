<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('rooms', function (Blueprint $table) {
              $table->increments('id');
              $table->string('name', 100);
              $table->integer('house_id')->unsigned();
              $table->foreign('house_id')
                    ->references('id')->on('houses');
              $table->string('description');
              $table->smallInteger('is_acitve')->default(1);
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
          Schema::drop('rooms');
    }
}
