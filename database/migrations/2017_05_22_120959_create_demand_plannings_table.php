<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandPlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demand_plannings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('demand_id');
            $table->foreign('demand_id')->references('id')->on('demands');
            $table->unsignedInteger('discipline_id');
            $table->foreign('discipline_id')->references('id')->on('disciplines');
            $table->unsignedInteger('school_semester_id');
            $table->foreign('school_semester_id')->references('id')->on('school_semesters');
            $table->integer('quantity_classes');
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
        Schema::dropIfExists('demand_plannings');
    }
}
