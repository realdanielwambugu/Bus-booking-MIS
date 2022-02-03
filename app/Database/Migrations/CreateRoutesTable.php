<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateRoutesTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table)
        {
            $table->id();

            $table->string('from_A');

            $table->string('to_B');

            $table->time('departure_time');

            $table->integer('cost_per_passanger');

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
        Schema::drop('routes');
    }
}
