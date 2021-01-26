<?php namespace Raxmatilla\Faoliyatlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaFaoliyatlarEkologiyaCategory extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_faoliyatlar_ekologiya_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_faoliyatlar_ekologiya_category');
    }
}
