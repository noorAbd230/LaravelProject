<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
       Schema::create('stores', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('img');
            $table->string('address');
            $table->string('rate');
            $table->integer('category_id');
            $table->foreign('category_id')->reference('id')->on('categories');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('stores');
    }
}
