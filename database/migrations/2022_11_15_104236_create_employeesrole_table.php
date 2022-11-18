<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesroleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        Schema::create('employeesrole', function (Blueprint $table) {
            $table->increments('EmployeesRoleId');
            $table->integer('EmployeesId');
            $table->string('EmployeesRoleName');
            $table->string('EmployeesRoleDescription');
            $table->timestamps();
        });
    }*/

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeesrole');
    }
}
