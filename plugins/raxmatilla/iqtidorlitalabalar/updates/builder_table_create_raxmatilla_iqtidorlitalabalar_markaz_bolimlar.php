<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRaxmatillaIqtidorlitalabalarMarkazBolimlar extends Migration
{
    public function up()
    {
        Schema::create('raxmatilla_iqtidorlitalabalar_markaz_bolimlar', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('logo');
            $table->string('joylashuv');
            $table->string('email');
            $table->string('tell');
            $table->text('content');
            $table->text('hujjatlar');
            $table->text('team');
            $table->string('b_boshligi');
            $table->integer('tartib_raqam');
            $table->integer('markaz_or_bolim');
            $table->string('b_boshligi_url_sahifa');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('raxmatilla_iqtidorlitalabalar_markaz_bolimlar');
    }
}
