<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespondenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respondent', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('response', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_id');
            $table->timestamps();
        });

        Schema::create('answer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('response_id');
            $table->foreignId('survey_question_id');
            $table->string('answer');
            $table->timestamps();
        });

        Schema::create('answer_option', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_option_id');
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
        //
    }
}
