<?php namespace Raxmatilla\Elonlar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteRaxmatillaElonlarTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('raxmatilla_elonlar_table');
    }
    
    public function down()
    {
        Schema::create('raxmatilla_elonlar_table', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title', 191);
            $table->string('slug', 191);
            $table->text('content');
            $table->string('status', 191)->nullable()->default('0');
            $table->string('about_status', 191);
            $table->boolean('active');
            $table->string('image', 191);
            $table->bigInteger('category_id');
        });
    }
}