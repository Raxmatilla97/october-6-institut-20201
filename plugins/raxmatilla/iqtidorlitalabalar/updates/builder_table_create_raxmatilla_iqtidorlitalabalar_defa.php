<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaIqtidorlitalabalarDefa extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_iqtidorlitalabalar_defa', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('small_avatar');
            $table->string('big_image');
            $table->string('small_content', 300);
            $table->text('blig_content');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_iqtidorlitalabalar_defa');
    }
}
