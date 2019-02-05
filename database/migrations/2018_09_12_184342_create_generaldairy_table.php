<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneraldairyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generaldairy', function (Blueprint $table) {
            $table->increments('generaldairyID');
            $table->string('name');
            $table->string('fName');
            $table->string('mName');
            $table->string('subject');
            $table->string('nid');
            $table->text('presentAddress');
            $table->text('permanentAddress');
            $table->text('cDescription');
            $table->string('aName');
            $table->string('mobile');
            $table->string('email');
            $table->date('completeDate')->nullable();
            $table->string('status')->default('Pending');
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
        Schema::dropIfExists('generaldairy');
    }
}
