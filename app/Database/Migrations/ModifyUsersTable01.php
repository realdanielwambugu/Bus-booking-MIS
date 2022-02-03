<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class ModifyUsersTable01
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->string('type')->default('passanger')->after('id');
        });

    }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {

    }
}
