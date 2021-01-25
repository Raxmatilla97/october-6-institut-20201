<?php namespace Raxmatilla\Faoliyatlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaFaoliyatlarXalqaroxamkorlik extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_faoliyatlar_xalqaroxamkorlik', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('active');
            $table->string('image');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('hujjatlar');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_faoliyatlar_xalqaroxamkorlik');
    }
}
