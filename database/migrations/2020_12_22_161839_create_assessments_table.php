<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->integer('subject_id');
            $table->integer('human_id');
            $table->float('midterm', 8, 2)->default('0.00');
            $table->float('endterm', 8, 2)->default('0.00');
            $table->float('final_exam', 8, 2)->default('0.00');
            $table->float('final_grade', 8, 2)->default('0.00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessments');
    }
}
