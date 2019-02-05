<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMostwantedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mostwanted', function (Blueprint $table) {
            $table->increments('mostwantedID');
            $table->string('name');
            $table->double('age',3)->default(0);
            $table->double('height',2,1)->default(0);
            $table->double('weight',3)->default(0);
            $table->text('bodyColor');
            $table->text('hairColor');
            $table->double('prizeMoney')->defult(0);
            $table->string('contact',11);
            $table->text('description');
            $table->string('tag')->nullable();
            $table->string('status')->default('Running');
            $table->date('completedDate')->nullable();
            $table->integer('genderID')->unsigned()->index();
            $table->foreign('genderID')->references('genderID')->on('gender')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('crimeTypeID')->unsigned()->index();
            $table->foreign('crimeTypeID')->references('crimeTypeID')->on('crimetype')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('policeStationID')->unsigned()->index();
            $table->foreign('policeStationID')->references('policeStationID')->on('policestation')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('id')->unsigned()->index();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('mostwanted');
    }
}
