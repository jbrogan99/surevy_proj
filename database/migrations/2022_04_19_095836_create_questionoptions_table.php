<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**
     * Defines the columns and attributes that will be made in the DB 
     */
    public function up()
    {
        Schema::create('question_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('question_option');
            $table->string('question_option2');
            $table->bigInteger('question_id')->unsigned();
        });
        Schema::table('question_options', function ($table) {
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_options');
    }
}
