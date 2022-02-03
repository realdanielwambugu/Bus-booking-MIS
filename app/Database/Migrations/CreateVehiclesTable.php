<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateVehiclesTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table)
        {
            $table->string('reg_no');

            $table->string('type');

            $table->integer('seats');

            $table->integer('route_id');

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
        Schema::drop('vehicles');
    }
}
