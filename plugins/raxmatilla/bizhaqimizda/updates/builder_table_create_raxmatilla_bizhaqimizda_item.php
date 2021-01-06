<?php namespace Raxmatilla\BizHaqimizda\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaBizhaqimizdaItem extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_bizhaqimizda_item', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('h5');
            $table->string('h2');
            $table->text('text');
            $table->string('list_key')->nullable();
            $table->string('list_url')->nullable();
            $table->string('page_slug')->nullable();
            $table->string('qabulhona_tel')->nullable();
            $table->string('qabul_text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_bizhaqimizda_item');
    }
}
