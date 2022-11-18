<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        Schema::create('employeesprojects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('EmployeesId');
            $table->string('EmployeesProjectsName');
            $table->string('EmployeesProjectsDescription');
            $table->string('EmployeesProjectsLocation');
            $table->string('EmployeesProjectsDuration');
            $table->string('EmployeesProjectsBudget');
            $table->string('EmployeesProjectsIsCompleted');
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
        Schema::dropIfExists('employeesprojects');
    }
}
