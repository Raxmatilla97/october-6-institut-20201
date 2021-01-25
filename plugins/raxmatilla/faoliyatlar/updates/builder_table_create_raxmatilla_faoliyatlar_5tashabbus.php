<?php namespace Raxmatilla\Faoliyatlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaFaoliyatlar5tashabbus extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_faoliyatlar_5tashabbus', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->boolean('active');
            $table->text('content');
            $table->text('hujjatlar');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_faoliyatlar_5tashabbus');
    }
}
