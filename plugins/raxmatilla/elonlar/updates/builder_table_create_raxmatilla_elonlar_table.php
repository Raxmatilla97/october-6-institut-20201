<?php namespace Raxmatilla\Elonlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaElonlarTable extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_elonlar_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('status')->nullable()->default('0');
            $table->string('about_status');
            $table->boolean('active');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_elonlar_table');
    }
}
