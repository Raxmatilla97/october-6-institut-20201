<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaIqtidorlitalabalarRahbariyat extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_iqtidorlitalabalar_rahbariyat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('fish');
            $table->string('mavqe');
            $table->string('ish_joyi')->nullable();
            $table->string('avatar')->nullable();
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_iqtidorlitalabalar_rahbariyat');
    }
}
