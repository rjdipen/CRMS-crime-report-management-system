<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZilaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zila', function (Blueprint $table) {
            $table->increments('zilaID');
            $table->string('name',160)->unique();
            $table->integer('divisionID')->unsigned()->index();
            $table->foreign('divisionID')->references('divisionID')->on('division')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('zila');
    }
}
