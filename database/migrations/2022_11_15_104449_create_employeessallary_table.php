<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeessallaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        Schema::create('employeessallary', function (Blueprint $table) {
            $table->increments('EmployeesSallaryId ');
            $table->integer('EmployeesId');
            $table->string('EmployeesSallaryMonthName');
            $table->string('EmployeesSallaryStipend');
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
        Schema::dropIfExists('employeessallary');
    }
}
