<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaIqtidorlitalabalarKafedralar extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_iqtidorlitalabalar_kafedralar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->text('content');
            $table->string('joylashuv');
            $table->string('email');
            $table->string('tell');
            $table->string('mudir_fish');
            $table->boolean('active');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_iqtidorlitalabalar_kafedralar');
    }
}
