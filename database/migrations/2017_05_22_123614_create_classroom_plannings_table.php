<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomPlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_plannings', function (Blueprint $table) {
            $table->string('classroom_day');
            $table->unsignedInteger('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->integer('on07_08')->nullable();
            $table->integer('on08_09')->nullable();
            $table->integer('on09_10')->nullable();
            $table->integer('on10_11')->nullable();
            $table->integer('on11_12')->nullable();
            $table->integer('on13_14')->nullable();
            $table->integer('on14_15')->nullable();
            $table->integer('on15_16')->nullable();
            $table->integer('on16_17')->nullable();
            $table->integer('on17_18')->nullable();
            $table->integer('on18_19')->nullable();
            $table->integer('on19_20')->nullable();
            $table->integer('on20_21')->nullable();
            $table->integer('on21_22')->nullable();
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
        Schema::dropIfExists('classroom_plannings');
    }
}
