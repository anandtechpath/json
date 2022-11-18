<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesleavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        Schema::create('employeesleaves', function (Blueprint $table) {
            $table->increments('EmployeesLeavesId');
            $table->integer('EmployeesId');
            $table->date('EmployeesLeavesDate');
            $table->string('EmployeesLeavesReason');
            $table->string('EmployeesLeavesAccept');
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
        Schema::dropIfExists('employeesleaves');
    }
}
