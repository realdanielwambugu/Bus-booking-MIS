<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateBookingsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table)
        {
            $table->id();

            $table->integer('user_id');

            $table->string('vehicle_reg_no');

            $table->integer('booked_seats');

            $table->string('status')->default('pending');

            $table->integer('total_cost');

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
        Schema::drop('bookings');
    }
}
