<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesdepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        Schema::create('employeesdepartment', function (Blueprint $table) {
            $table->increments('EmployeesDepartmentId');
            $table->integer('EmployeesId');
            $table->string('EmployeesDepartmentName');
            $table->string('EmployeesDepartmentDescription');
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
        Schema::dropIfExists('employeesdepartment');
    }
}
