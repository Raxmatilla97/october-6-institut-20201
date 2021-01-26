<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaIqtidorlitalabalarFakultetlar extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_iqtidorlitalabalar_fakultetlar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('image');
            $table->text('teamlar');
            $table->text('hujjatlar');
            $table->text('kafedralar');
            $table->string('dekan_fish');
            $table->string('dekan_email');
            $table->string('dekan_telefon');
            $table->string('fakultet_joylashuvi');
            $table->boolean('active');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('logotip');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_iqtidorlitalabalar_fakultetlar');
    }
}
