<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fir', function (Blueprint $table) {
            $table->increments('firID');
            $table->string('vName');
            $table->string('vfName');
            $table->string('vmName');
            $table->string('vMobile',11);
            $table->string('vNid')->unique();
            $table->double('vAge',3)->default(0);
            $table->text('vPresentAddress');
            $table->text('vPermanentAddress');
            $table->string('cName');
            $table->string('cfName');
            $table->string('cMobile',11);
            $table->double('cAge',3)->default(0);
            $table->text('cPresentAddress');
            $table->text('cPermanentAddress');
            $table->string('cName1')->nullable();
            $table->string('cName2')->nullable();
            $table->string('cfName1')->nullable();
            $table->string('cfName2')->nullable();
            $table->date('cDate');
            $table->string('cLocation');
            $table->time('cTime');
            $table->text('cDescription');
            $table->date('completeDate')->nullable();
            $table->string('status')->default('Pending');
            $table->integer('policeStationID')->unsigned()->index();
            $table->foreign('policeStationID')->references('policeStationID')->on('policestation')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('zilaID')->unsigned()->index();
            $table->foreign('zilaID')->references('zilaID')->on('zila')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('upazilaID')->unsigned()->index();
            $table->foreign('upazilaID')->references('upazilaID')->on('upazila')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('crimeTypeID')->unsigned()->index();
            $table->foreign('crimeTypeID')->references('crimeTypeID')->on('crimetype')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('fir');
    }
}
