<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100);
            $table->integer('year');
            $table->string('director',100);
            $table->text('poster',250);
            $table->enum('rented', array('true', 'false'));
            $table->text('synopsis',250);
            
          
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('catalogs');
    }
}
