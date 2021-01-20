<?php namespace Raxmatilla\IqtidorliTalabalar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateRaxmatillaIqtidorlitalabalarMarkazBolimlar extends Migration
{
    public function up()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_markaz_bolimlar', function($table)
        {
            $table->integer('markaz_or_bolim')->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('raxmatilla_iqtidorlitalabalar_markaz_bolimlar', function($table)
        {
            $table->integer('markaz_or_bolim')->default(null)->change();
        });
    }
}
