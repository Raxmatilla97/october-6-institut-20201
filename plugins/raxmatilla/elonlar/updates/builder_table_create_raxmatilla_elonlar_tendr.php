<?php namespace Raxmatilla\Elonlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaElonlarTendr extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_elonlar_tendr', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->text('content');
            $table->string('small_content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_elonlar_tendr');
    }
}
