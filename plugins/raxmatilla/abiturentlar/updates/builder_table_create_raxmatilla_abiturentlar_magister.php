<?php namespace Raxmatilla\Abiturentlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaAbiturentlarMagister extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_abiturentlar_magister', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('image');
            $table->boolean('active');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_abiturentlar_magister');
    }
}
