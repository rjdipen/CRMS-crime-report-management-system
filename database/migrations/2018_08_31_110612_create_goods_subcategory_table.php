<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsSubcategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goodssubcategory', function (Blueprint $table) {
            $table->increments('goodsSubcategoryID');
            $table->string('name', 160)->unique();
            $table->integer('goodsCategoryID')->unsigned()->index();
            $table->foreign('goodsCategoryID')->references('goodsCategoryID')->on('goodscategory')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('goodsSubcategory');
    }
}
