<?php namespace Raxmatilla\Majmualar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaMajmualarIlmiyMaqolalar extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_majmualar_ilmiy_maqolalar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->integer('user_id');
            $table->string('file_upload1');
            $table->string('count');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_majmualar_ilmiy_maqolalar');
    }
}
