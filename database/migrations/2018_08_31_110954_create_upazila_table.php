<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpazilaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upazila', function (Blueprint $table) {
            $table->increments('upazilaID');
            $table->string('name',170)->unique();
            $table->integer('zilaID')->unsigned()->index();
            $table->foreign('zilaID')->references('zilaID')->on('zila')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('upazila');
    }
}
