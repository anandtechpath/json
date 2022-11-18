<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesperformanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        Schema::create('employeesperformance', function (Blueprint $table) {
            $table->increments('EmployeesPerformanceId');
            $table->integer('EmployeesId');
            $table->string('EmployeesPerformanceScore');
            $table->string('EmployeesPerformanceAccuracyScore');
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
        Schema::dropIfExists('employeesperformance');
    }
}
