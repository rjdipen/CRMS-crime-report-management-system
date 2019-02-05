<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissingGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missinggoods', function (Blueprint $table) {
            $table->increments('missingGoodsID');
            $table->string('name',50);
            $table->string('imeChessis',40)->nullable();
            $table->string('lPlace');
            $table->text('goodsColor');
            $table->string('contact',11);
            $table->text('description')->nullable();
            $table->string('tag',160)->nullable();
            $table->string('status')->default('Pending');
            $table->date('missingDate');
            $table->date('completeDate')->nullable();
            $table->integer('goodsCategoryID')->unsigned()->index();
            $table->foreign('goodsCategoryID')->references('goodsCategoryID')->on('goodscategory')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('goodsSubcategoryID')->unsigned()->index();
            $table->foreign('goodsSubcategoryID')->references('goodsSubcategoryID')->on('goodssubcategory')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('missingGoods');
    }
}
