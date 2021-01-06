<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaMajmualarKafedralar extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_majmualar_kafedralar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_majmualar_kafedralar');
    }
}
