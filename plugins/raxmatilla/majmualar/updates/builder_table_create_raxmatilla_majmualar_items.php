<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaMajmualarItems extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_majmualar_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('files');
            $table->integer('user_id')->nullable();
            $table->integer('manba_id')->nullable();
            $table->integer('fakultet_id')->nullable();
            $table->integer('kafedra_id')->nullable();
            $table->integer('fanlar_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_majmualar_items');
    }
}
