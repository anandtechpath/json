<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesloginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        Schema::create('employeeslogin', function (Blueprint $table) {
            $table->increments('EmployeesLoginId');
            $table->integer('EmployeesId');
            $table->string('EmployeesLoginEmail');
            $table->string('EmployeesLoginPhone');
            $table->string('EmployeesLoginPassword');
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
        Schema::dropIfExists('employeeslogin');
    }
}
