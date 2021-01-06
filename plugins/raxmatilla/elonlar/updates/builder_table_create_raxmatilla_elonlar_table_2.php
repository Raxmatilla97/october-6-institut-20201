<?php namespace Raxmatilla\Elonlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaElonlarTable2 extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_elonlar_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->text('content');
            $table->string('above_status');
            $table->string('status')->nullable();
            $table->boolean('active')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_elonlar_table');
    }
}
