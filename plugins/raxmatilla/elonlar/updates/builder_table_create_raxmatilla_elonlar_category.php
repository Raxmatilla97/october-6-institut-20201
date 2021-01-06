<?php namespace Raxmatilla\Elonlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaElonlarCategory extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_elonlar_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_elonlar_category');
    }
}
